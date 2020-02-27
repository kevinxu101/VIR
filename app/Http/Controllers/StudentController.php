<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function student(Request $req){
        if(Auth::check()){
            if(Auth::user()->type == "student"){
                return view('student_home')->withMessage("Student");
            }else return view('home');
        }else return view('auth/login');
    }
}
