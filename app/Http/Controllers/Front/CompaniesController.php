<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class CompaniesController extends Controller
{
    public function index()
    {
        return view('front.pages.companies');
    }
}
