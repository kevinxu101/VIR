<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class TeacherMiddleware
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
        if ($request->user() && $request->user()->type == "admin")
        {
            return redirect()->route('admin_dashboard');
        }

        else if ($request->user() && $request->user()->type == "student")
        {
            return redirect()->route('student_home');
        }

        else return $next($request);
    }
}
