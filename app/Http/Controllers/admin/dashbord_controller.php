<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashbord_controller extends Controller
{
    public function index(){
        $user=Auth()->user();
        return view('admin.index',compact('user'));
    }
}