<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function showHome(){
        return view('home');
    }
    public function showLogin(){
        return view ('login');
    }
    public function showRegister(){
        return view ('register');
    }
    public function showLoginOk(){
        return view('loginok');
    }
    
}
