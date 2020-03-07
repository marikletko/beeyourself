<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function home(){
        return view('auth.login');
    }

    public function user_page(){
        return "Hello user!";
    }
}
