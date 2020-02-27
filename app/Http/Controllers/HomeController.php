<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\UsersMiddleware;
use App\User;

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
        return view('home');
      
    }
 

    public function admin(Request $req){
        return view('admin_dashboard')->withMessage("admin");
    }
    public function super_admin(Request $req){
        return view('admin_dashboard')->withMessage("Super Admin");
    }
    public function student(Request $req){
        return view('student_home')->withMessage("Member");
    }
}
