<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class LoginController extends Controller
{
   /*  public function loginpost(Request $request){
        dd("1");
        return view('users.userwelcome');
    } */
      public function login(Request $request){
        $username = $request->username;
        $password = $request->password;
        $match = [
          'username' => $username,
          'password' => $password
        ];

        $user = DB::table('users')->where($match)->first();
        if($user!=null){
        if ($user->role_id == 1) {
          session(['username' => $user->username]);
          session(['role_id' => $user->role_id]);
          session(['email' => $user->email]);
          session(['CN' => $user->CN]);
          return Redirect::route('sysadminindex');

        }
        elseif ($user->role_id == 2) {
          session(['username' => $user->username]);
          session(['role_id' => $user->role_id]);
          session(['email' => $user->email]);
          session(['CN' => $user->CN]);
          return Redirect::route('adminindex');
        }
        else{
          session(['username' => $user->username]);
          session(['role_id' => $user->role_id]);
          session(['email' => $user->email]);
          session(['CN' => $user->CN]);
          return Redirect::route('userindex');
        }
      }
      else {
        Alert::error('Kullanıcı Adı veya Şifreniz hatalıdır');
        return back();
      }
    }
}
