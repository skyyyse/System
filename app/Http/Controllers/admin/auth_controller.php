<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class auth_controller extends Controller
{
    public function login_page(){
        return view('admin.auth.pages-sign-in');
    }
    
    public function register_page(){
        return view('admin.auth.pages-sign-up');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->role == 1) {
                return redirect()->route('index');
            } else {
                return redirect()->route('page-login');
            }
        } else {
            return redirect()->route('page-login');
        }
    }

    public function register(Request $request){
        // $
    }
}
