<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index(){
        if(Auth::guard('admin')){
            return view('admin.pages.home');
        }
        else
        return view('admin.pages.login');
    }
    public function login(){
        return view('admin.pages.login');
    }
    public function authenticate(Request $request){
        $this->validate($request, [
            'adminuser' => 'required',
            'password' => 'required',
        ]);
        if (auth()->guard('admin')->attempt(['adminuser' => $request->input('adminuser'), 'password' => $request->input('password')])) {
            return redirect('/admin/home');
        } else {
            return redirect('admin/login')->with('message','Wrong Credentials');
        }   
    }
    public function logout(Request $request){
        if(Auth::guard('admin')->check()){
        Auth::guard('admin')->logout();
        return redirect('/admin/login')->with('message','You are now logged out!');
        }
        $this->guard()->logout();
        $request->session()->invalidate();
    
    }
}
