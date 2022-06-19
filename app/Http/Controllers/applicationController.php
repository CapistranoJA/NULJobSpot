<?php

namespace App\Http\Controllers;

use App\Models\jobs;
use App\Models\User;
use App\Models\applications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class applicationController extends Controller
{
    public function index(){
       
        return view('job-applications.index',['applications'=>applications::latest()->filter(request(['search']))->paginate(10)]);
    }
    
    public function store(Request $request){
        $user = auth()->user()->id;
        $uname=auth()->user()->uname;
        $formFields=$request->validate([
        'resume'=>'required|mimes:pdf,doc,docx',
        ]);
        $formFields['user_id']=$user;
        $formFields['uname']=$uname;
        if($request->hasFile('resume')){
            $formFields['resume']=$request->file('resume')->store('applicants','public');
        }
        $formFields['jobs_id']=$request->input('jobs_id');

        applications::create($formFields);
        return redirect('/joblist')->with('message','Your application has been sent! Visit your profile for more info!');
    }
    public function download($resume){
        return response()->download(storage_path('/app/public/applicants/'. $resume));
    }
    public function adminreview($resume){
        return response()->download(storage_path('/app/public/applicants/'. $resume));
    }
    public function show (applications $application) {
        $application = applications::find($application->id);
        $user = User::find($application->user_id);
        $jobs = jobs::find($application->jobs_id);
        return view('job-applications.show',['applications'=>$application,'users'=>$user,'jobs'=>$jobs]);
    }
}

