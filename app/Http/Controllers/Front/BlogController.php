<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        return view('front.pages.blog');
    }
}
