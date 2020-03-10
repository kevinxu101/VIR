<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        if(Auth::check()){
            $this->redirectTo = '/';

        }
    }

    

    
    public function redirectTo(){

       

       if(Auth::user()->type == "admin"){
        $this->redirectTo = '/admin_dashboard';
        return $this->redirectTo;
       }
       if(Auth::user()->type == "student"){
        $this->redirectTo = '/student_home';
        return $this->redirectTo;
       }if(Auth::user()->type == "teacher"){
        $this->redirectTo = '/teacher_dashboard';
        return $this->redirectTo;
       }
    }
    
}
