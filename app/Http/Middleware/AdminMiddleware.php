<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;



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
        if ($request->user() && $request->user()->type == "student")
        {
            return new Response(view('student_home')->with('alert','Unanthoraized'));
        }
        else if ($request->user() && $request->user()->type == "teacher")
        {
            return new Response(view('teacher_dashboard')->with('alert','Unanthoraized'));
        }
        
        else return $next($request);
        
    }
}
