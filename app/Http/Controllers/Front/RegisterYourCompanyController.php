<?php

namespace App\Http\Controllers\Front;

 use App\Http\Controllers\Controller;

class RegisterYourCompanyController extends Controller
{
    public function index()
    {
        return view('front.pages.register-your-company');
    }
}
