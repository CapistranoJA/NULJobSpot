<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        'contact_number'=>['required','regex:((^(\+)(\d){12}$)|(^\d{11}$))'],
        'civilstatus'=>'required',
        'email'=>['required','email', Rule::unique('users','email')],
        'password'=>'required|confirmed|min:8',
        'checkbox' =>['required'],
    ]);
        $formFields['status']='unemployed';
        $formFields['password']=bcrypt($formFields['password']);
        $users = User::create($formFields);
        return redirect('/')->with('message', 'User Registration successful!');
    }
}
