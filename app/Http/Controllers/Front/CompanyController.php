<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function index()
    {
        return view('front.pages.company');
    }
}
