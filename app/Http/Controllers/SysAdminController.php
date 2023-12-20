<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SysAdminController extends Controller
{
    public function index(){
        return view('sysadminusers.index');
    }
}
