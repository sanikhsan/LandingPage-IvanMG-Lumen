<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Sites;
use App\Seo;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function E403(){
        return view('error.error-403');
    }

    public function E404(){
        return view('error.error-404');
    }

    public function E500(){
        return view('error.error-500');
    }

}
