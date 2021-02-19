<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Sites;
use App\Seo;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Concerns\InteractsWithInput;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SitesController extends Controller
{
    public function __construct()
    {
        $this->middleware('login');
    }

    public function sites(Request $request){
        $token = $request->token;
        $getSites = Sites::OrderBy("id","DESC")->first();

        // $out = [
        //     "message" => "detail_sites",
        //     "result" => $getSites
        // ];

        // return response()->json($out, 200);
        return view('admin.pages.edit-sites', ['token'=>$token],['getSites'=>$getSites]);
    }

    public function update(Request $request)
    {
        $token = $request->token;

        $editSites = Sites::where('id',$request->id);
        $editSites->update([
            'alamat'=>$request->alamat,
            'email'=>$request->email,
            'no_telp'=>$request->no_telp,
            'no_wa'=>$request->no_wa,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'LinkedIn'=>$request->LinkedIn
        ]);
        return redirect("/admin/sites?token=".$token);
        // if ($request->isMethod('patch')) {

        //     $this->validate($request, [
        //         'id' => 'required',
        //         'alamat' => 'required',
        //         'email'  => 'required',
        //         'no_telp' => 'required',
        //         'no_wa' => 'required'
                
        //     ]);
        //     $id = $request->input('id');
        //     $alamat = $request->input('alamat');
        //     $email = $request->input('email');
        //     $no_telp = $request->input('no_telp');
        //     $no_wa = $request->input('no_wa');
        //     $facebook = $request->input('facebook');
        //     $twitter = $request->input('twitter');
        //     $LinkedIn = $request->input('LinkedIn');

        //     $sites = Sites::find($id);

        //     $data = [
        //         'alamat' => $alamat,
        //         'email' => $email,
        //         'no_telp' => $no_telp,
        //         'no_wa' => $no_wa,
        //         'facebook' => $facebook,
        //         'twitter' => $twitter,
        //         'LinkedIn' => $LinkedIn
        //     ];

        //     $update = $sites->update($data);

        //     if ($update) {
        //         $out  = [
        //             "message" => "success_update_data",
        //             "results" => $data,
        //             "code"  => 200
        //         ];
        //     } else {
        //         $out  = [
        //             "message" => "vailed_update_data",
        //             "results" => $data,
        //             "code"   => 404,
        //         ];
        //     }

        //     return response()->json($out, $out['code']);
        // }
    }
}
