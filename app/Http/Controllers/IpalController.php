<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Sites;
use App\Seo;
use App\About;
use App\Ipal;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Concerns\InteractsWithInput;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class IpalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('login');
    }
    //

    public function index(Request $request){
        $token = $request->token;
        $ipal = Ipal::get();
        return view('admin.pages.ipal', compact('token','ipal'));
    }

    public function upload(Request $request){
        $token = $request->token;
        $this->validate($request, [
			'judul' => 'required',
			'deskripsi' => 'required',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		]);
 
		// menyimpan data gambar yang diupload ke variabel $gambar
		$gambar = $request->file('gambar');

        $nama_gambar = $gambar->getClientOriginalName();
 
      	// isi dengan nama folder tempat kemana gambar diupload
		$tujuan_upload = 'data_ipal';
        $gambar->move($tujuan_upload,$nama_gambar);

        Ipal::create([
			'judul' => $request->judul,
			'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar,
		]);
 
        return redirect("/admin/ipal?token=".$token);
    }

    public function hapus(Request $request, $id){
        // hapus file
        $token = $request->token;
		$gambar = Ipal::where('id',$id)->first();
		File::delete('/data_ipal/'.$gambar->file);
 
		// hapus data
		Ipal::where('id',$id)->delete();
 
		return redirect("/admin/ipal?token=".$token);
    }
}
