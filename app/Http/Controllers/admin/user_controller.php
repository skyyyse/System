<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class user_controller extends Controller
{
    
    public function index(){
        $user=Auth()->user();
        return view('admin.user.index',compact('user'));
    }
}
