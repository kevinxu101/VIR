<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\UsersMiddleware;
use App\User;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->type == "student"){
            return redirect()->route('student_home');

        }
        if(Auth::user()->type == "admin"){
            return redirect()->route('admin_dashboard');

        }
        if(Auth::user()->type == "teacher"){
            return redirect()->route('teacher_dashboard');
        }
      
    }
 

    public function admin(Request $req){
        return view('admin_dashboard')->withMessage("admin")->name('admin_dashboard');
    }
    public function super_admin(Request $req){
        return view('admin_dashboard')->withMessage("Super Admin");
    }
    public function student(Request $req){
        return view('student_home')->withMessage("Member");
    }
}
