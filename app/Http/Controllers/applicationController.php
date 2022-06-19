<?php

namespace App\Http\Controllers;

use App\Models\applications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class applicationController extends Controller
{
    public function store(Request $request){
        $user = auth()->user()->id;
        $formFields=$request->validate([
        'resume'=>'required|mimes:pdf,doc,docx',
        ]);
        $formFields['user_id']=$user;
        if($request->hasFile('resume')){
            $formFields['resume']=$request->file('resume')->store('applicants','public');
        }
        $formFields['jobs_id']=$request->input('jobs_id');

        applications::create($formFields);
        return redirect('/joblist')->with('message','Your application has been sent!');
    }
    public function download($resume){
        return response()->download(storage_path('/app/public/applicants/'. $resume));
    }
}
