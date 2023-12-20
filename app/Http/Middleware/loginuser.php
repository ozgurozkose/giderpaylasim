<?php

namespace App\Http\Middleware;

use Brian2694\Toastr\Toastr;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class loginuser
{

    public function handle(Request $request, Closure $next)
    {
        $role_id=session('role_id');
        if($role_id==3){
            return $next($request);
        }
        else{
            Auth::logout();
            Session::flush();
            $request->session()->flush();
            Alert::error('Giriş Yapmalısınız');
            return Redirect::route('login');

        }

    }
}