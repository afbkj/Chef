<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgetPassword extends Controller
{
    function ForgetPassword(){
        return view(view:"forget-password");
    }
}
