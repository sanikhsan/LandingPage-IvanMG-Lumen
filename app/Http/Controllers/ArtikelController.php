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

class ArtikelController extends Controller
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

    public function ipal(Request $request){
        $about = About::OrderBy("id","DESC")->first();
        $token = $request->token;
        return view('admin.pages.edit-artikel', compact('token','about'));
    }

    public function interior(Request $request){
        $about = About::OrderBy("id","DESC")->first();
        $token = $request->token;
        return view('admin.pages.edit-artikel', compact('token','about'));
    }

}
