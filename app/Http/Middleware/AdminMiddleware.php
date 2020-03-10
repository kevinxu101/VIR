<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;



class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::guest()){
            return redirect()->route('home');
        }
        if ($request->user() && $request->user()->type == "student")
        {
            return redirect()->route('student_home');
        }
        else if ($request->user() && $request->user()->type == "teacher")
        {
            return redirect()->route('teacher_dashboard');
        }
        
        else return $next($request);
        
    }
}
