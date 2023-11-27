<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {   
        session()->destroy();
        return view("login/login_content");
    }
}
