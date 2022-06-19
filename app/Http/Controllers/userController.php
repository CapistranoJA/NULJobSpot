<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use App\Models\applications;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    //create
    public function create(){
        return view('user.pages.register');
    }
    public function store(Request $request){
        $formFields = $request->validate([
        'uname'=>['required','min:6'],
        'fname'=>['required'],
        'lname'=>['required'],
        'mname'=>['required'],
        'gender'=>['required'],
        'address'=>['required'],
        'birthdate'=>'required|date|before:18 years ago',
        'contact_number'=>['required','regex:((^(\+)(\d){12}$)|(^\d{11}$))',Rule::unique('users','contact_number')],
        'civilstatus'=>'required',
        'email'=>['required','email', Rule::unique('users','email')],
        'password'=>'required|confirmed|min:8',
        'checkbox' =>['required'],
    ]);
        $formFields['password']=bcrypt($formFields['password']);
        $users = User::create($formFields);
        return redirect('/')->with('message', 'User Registration successful!');
    }
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/')->with('message','You are now logged out!');

    }
    public function login(){
        if(!Auth::check()){
        return view('user.pages.login');
        }
        else
        return redirect('/')->with('message','You are already Logged in!!');
    }

    public function authentication(Request $request){
        $formFields = $request->validate([
            'uname'=>['required'],
            'password'=>'required',
        ]);
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/')->with('message','You are now logged in!');
        }
        return back()->withErrors(['uname'=>'Invalid Credentials'])->onlyInput('uname');

    }

    public function profile(User $users){
        $users=auth()->user()->id;
        $applications= applications::with('User')->get();
        $users = User::find($users);



        return view('user.pages.my-profile',['users'=>$users]);
    }
}
