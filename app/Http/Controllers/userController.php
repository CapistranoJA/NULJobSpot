<?php

namespace App\Http\Controllers;
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
        'name'=>['required','min:6'],
        'email'=>['required','email', Rule::unique('users','email')],
        'password'=>'required|confirmed|min:8'
    ]);
        $formFields['password']=bcrypt($formFields['password']);
        $user = User::create($formFields);
    }
}
