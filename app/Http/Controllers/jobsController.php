<?php

namespace App\Http\Controllers;
use App\Models\jobs;
use App\Models\departments;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class jobsController extends Controller
{
    //preview
    public function preview(){
        return view('jobs.index',['jobs'=>jobs::latest()->limit(3)->get()
    ]);

    }
    public function show (jobs $job) {
        return view('jobs.show',['jobs'=>$job]);
    }
    public function userindex(){
        return view('user.pages.home',['jobs'=>jobs::latest()->filter(request(['search']))->paginate(2)
    ]);
    }

    public function manage(){
        return view('jobs.manage',['jobs'=>jobs::latest()->filter(request(['search']))->paginate(10)
    ]);
    }
    public function create()
    {
        return view('jobs.create',[
            'departments'=>departments::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title'=>['required','min:6'],
            'dept_id'=>'required',
            'department',
            'salary'=>'required|regex:/^[0-9]+$/',
            'qualifications'=>'required',
            'description'=>'required',
            'jobs_logo'=>'image|mimes:jpg,png,jpeg,gif,svg|max:4098',
        ]);
        $departments=departments::where('id',$formFields['dept_id'])->first();
        $formFields['department']= $departments->department;
        if($request->hasFile('jobs_logo')){
            $formFields['jobs_logo']=$request->file('jobs_logo')->store('jobslogo','public');
        }
        jobs::create($formFields);
        return redirect('/admin/home/vacancy');
    }
    public function edit(jobs $job){
        return view('jobs.edit',['jobs'=>$job, 'departments'=>departments::all()]);
        dd($job);
    }
    public function update(Request $request,jobs $job){
        $formFields = $request->validate([
            'title'=>['required','min:6'],
            'dept_id'=>'required',
            'department',
            'salary'=>'required|regex:/^[0-9]+$/',
            'qualifications'=>'required',
            'description'=>'required',
            'jobs_logo'=>'image|mimes:jpg,png,jpeg,gif,svg|max:4098',
        ]);
        $departments=departments::where('id',$formFields['dept_id'])->first();
        $formFields['department']= $departments->department;
        if($request->hasFile('jobs_logo')){
            $formFields['jobs_logo']=$request->file('jobs_logo')->store('jobslogo','public');
        }
        $job->update($formFields);
        return redirect('/admin/home/vacancy')->with('message','Edit Successful!');
        
    }
    public function destroy(jobs $jobs)
    {
        $jobs->applications()->delete();
        $jobs->delete();
        return redirect('/admin/home/vacancy')->with('message','Successfully Deleted');
    }
}
