<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Sites;
use App\Seo;
use App\About;
use App\Interior;
use App\Ipal;
use App\Carousel;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class LandingController extends Controller
{
    public function index(){
        $about = About::OrderBy("id","DESC")->first();
        $seo = Seo::OrderBy("id","DESC")->first();
        $sites = sites::OrderBy("id","DESC")->first();
        $interior = Interior::get();
        $ipal = Ipal::get();
        $carousel = Carousel::get();
        return view('welcome',compact('seo','sites','about','interior','ipal','carousel'));
    }

    public function about(){
        $about = About::OrderBy("id","DESC")->first();
        $seo = Seo::OrderBy("id","DESC")->first();
        $sites = sites::OrderBy("id","DESC")->first();
        return view('pages.about',compact('seo','sites','about'));
    }

    public function serviceipal(){
        $seo = Seo::OrderBy("id","DESC")->first();
        $sites = sites::OrderBy("id","DESC")->first();
        $ipal = Ipal::get();
        return view('pages.service',compact('seo','sites','ipal'));
    }

    public function serviceinterior(){
        $seo = Seo::OrderBy("id","DESC")->first();
        $sites = sites::OrderBy("id","DESC")->first();
        $interior = Interior::get();
        return view('pages.service1',compact('seo','sites','interior'));
    }

    public function contact(){
        $about = About::OrderBy("id","DESC")->first();
        $seo = Seo::OrderBy("id","DESC")->first();
        $sites = sites::OrderBy("id","DESC")->first();
        return view('pages.contact',compact('seo','sites','about'));
    }

    public function article(){
        $about = About::OrderBy("id","DESC")->first();
        $seo = Seo::OrderBy("id","DESC")->first();
        $sites = sites::OrderBy("id","DESC")->first();
        return view('pages.article',compact('seo','sites','about'));
    }
}