<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontEndLoginController extends Controller
{
    public function showLoginForm(){
    	return view('frontEnd.userLogin.userLogin');
    }
}
