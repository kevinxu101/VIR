<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function admin(Request $req){
        if(Auth::check()){
            if(Auth::user()->type == "admin"){
                return view('admin_dashboard')->withMessage("Admin");
            }else return view('home');
        }else return view('auth/login');
       
    }
}
