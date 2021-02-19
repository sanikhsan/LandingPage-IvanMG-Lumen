<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Sites;
use App\Seo;
use App\About;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Concerns\InteractsWithInput;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdminController extends Controller
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

    public function home(Request $request){
        $token = $request->token;
        $about = About::OrderBy("id","DESC")->first();
        return view('admin.index', compact('token','about'));
    }

    public function update(Request $request){
        $token = $request->token;
        $editPesan = About::where('id',$request->id);
        $editPesan->update([
            'tentang'=>$request->tentang,
            'deskripsi'=>$request->deskripsi,
            'kontak'=>$request->kontak,
            'googlemaps'=>$request->googlemaps
        ]);

        return redirect("/admin/home?token=".$token);
    }

}
