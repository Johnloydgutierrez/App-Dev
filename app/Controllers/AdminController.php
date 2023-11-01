<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function login()
    {
        return view('login');
    }

    
    public function register()
    {
        return view('register');
    }

    
    public function forgotpass()
    {
        return view('forgotpass');
    }

    public function website()
    {
        return view('website');
    }
}
