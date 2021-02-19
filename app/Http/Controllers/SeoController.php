<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Sites;
use App\Seo;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class SeoController extends Controller
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

    public function seo(Request $request){
        $token = $request->token;
        $getSeo = Seo::OrderBy("id","DESC")->first();

        // $out = [
        //     "message" => "seo_sites",
        //     "result" => $getSeo
        // ];
        // return response()->json($out, 200);
        return view("admin.pages.edit-seo",['token'=>$token],['getSeo'=>$getSeo]);
    }

    public function update(Request $request)
    {
        $token = $request->token;

        $editSeo = Seo::where('id',$request->id);
        $editSeo->update([
            'title'=>$request->title,
            'keyword'=>$request->keyword,
            'author'=>$request->author,
            'description'=>$request->description,
            'googletag'=>$request->googletag,
            'bingtag'=>$request->bingtag
        ]);
        return redirect("/admin/seo?token=".$token);
        // if ($request->isMethod('patch')) {

        //     $this->validate($request, [
        //         'id' => 'required',
        //         'title' => 'required',
        //         'keyword'  => 'required',
        //         'author' => 'required',
        //         'description' => 'required'
                
        //     ]);
        //     $id = $request->input('id');
        //     $title = $request->input('title');
        //     $keyword = $request->input('keyword');
        //     $author = $request->input('author');
        //     $description = $request->input('description');
        //     $googletag = $request->input('googletag');
        //     $bingtag = $request->input('bingtag');

        //     $seo = Seo::find(   $id);

        //     $data = [
        //         'title' => $title,
        //         'keyword' => $keyword,
        //         'author' => $author,
        //         'description' => $description,
        //         'googletag' => $googletag,
        //         'bingtag' => $bingtag
        //     ];

        //     $update = $seo->update($data);

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
