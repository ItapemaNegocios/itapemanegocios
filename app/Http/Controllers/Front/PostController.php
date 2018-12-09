<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index($slug)
    {
        return view('front.pages.post', compact('slug'));
    }
}
