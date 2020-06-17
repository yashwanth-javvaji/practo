<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class AdminAuth
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
        $path = $request->path();
        if($path == 'admin%20login' && Session::get('admin')){
            Session::flash('errors', 'You are already logged in!');
            return redirect('/');
        }
        if($path == 'bookings%20list' && !Session::get('admin')){
            Session::flash('errors', 'You need to login to access bookings list');
            return redirect('/');
        }
        if($path == 'database' && !Session::get('admin')){
            Session::flash('errors', 'You need to login to access database');
            return redirect('/');
        }
        if($path == 'logout' && !Session::get('admin')){
            Session::flash('errors', 'To access logout you need to be logged in');
            return redirect('/');
        }
        if($path == 'booking%20details' && !Session::get('user_name')){
            return redirect('/new booking page');
        }
        if(substr($path, 0, 6) == 'delete' && !Session::get('admin')){
            Session::flash('errors', 'To access delete you need to be logged in');
            return redirect('/');
        }
        if(substr($path, 0, 3) == 'add' && !Session::get('admin')){
            Session::flash('errors', 'To access add you need to be logged in');
            return redirect('/');
        }
        if(substr($path, 0, 4) == 'edit' && !Session::get('admin')){
            Session::flash('errors', 'To access edit you need to be logged in');
            return redirect('/');
        }
        return $next($request);
    }
}
