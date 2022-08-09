<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PublicPagescontroller extends Controller
{
    public function home()
    {
        return view('PublicPages.home');
    }

    public function services()
    {
        return view('PublicPages.services');
    }

    public function blog()
    {
        return view('PublicPages.blog');
    }

    public function blog_detail($slug)
    {
        return view('PublicPages.blog_detail');
        
    }


    public function about()
    {
        return view('PublicPages.about');
    }

    public function contact()
    {
        return view('PublicPages.contact');
    }
}
