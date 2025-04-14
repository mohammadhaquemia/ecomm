<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }
    public function profile()
    {
        return view('frontend.layouts.profile');
    }
    public function index()
    {
        return view('frontend.layouts.index');
    }
    public function about()
    {
        return view('frontend.layouts.about');
    }
    public function blog()
    {
        return view('frontend.layouts.blog');
    }
    public function contact()
    {
        return view('frontend.layouts.contact');
    }
    public function products()
    {
        return view('frontend.layouts.products');
    }
    public function services()
    {
        return view('frontend.layouts.services');
    }

    
}
