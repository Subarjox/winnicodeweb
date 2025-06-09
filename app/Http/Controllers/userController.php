<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;


abstract class userController extends Controller
{
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }
}
