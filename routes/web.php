<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SysAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    return view('welcome');
});
Route::post('/login',[LoginController::class,'login'])->name('login');

Route::prefix('user')->middleware('loginuser')->group(function (){
    Route::get('anasayfa', [UserController::class, 'index'])->name('userindex');
});

Route::prefix('admin')->middleware('loginadmin')->group(function(){
    Route::get('anasayfa', [AdminController::class, 'index'])->name('adminindex');
    // Route::get('readXML', [AdminController::class, 'readXML'])->name('readXML');
    Route::post('readXML', [AdminController::class, 'readXML'])->name('readXML');
    Route::post('readXLSX', [AdminController::class, 'readXLSX'])->name('readXLSX');


});

Route::prefix('sysadmin')->middleware('loginsysadmin')->group(function(){
    Route::get('anasayfa', [SysAdminController::class, 'index'])->name('sysadminindex');
});
