<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class NotFoundController extends Controller
{
    public function index()
    {
        return view('front.pages.404');
    }
}
