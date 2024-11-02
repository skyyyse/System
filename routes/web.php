<?php

use App\Http\Controllers\admin\auth_controller;
use App\Http\Controllers\admin\dashbord_controller;
use App\Http\Controllers\admin\user_controller;
use Illuminate\Support\Facades\Route;
Route::get('/admin/login',[auth_controller::class,'login_page'])->name('page-login');
Route::get('/admin/register',[auth_controller::class,'register_page'])->name('page-register');
Route::post('/admin/server/login',[auth_controller::class,'login'])->name('login');
Route::post('/admin/server/register',[auth_controller::class,'register'])->name('register');
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/index',action: [dashbord_controller::class,'index'])->name('index');
    Route::get('/user',action: [user_controller::class,'index'])->name('user-index');
});