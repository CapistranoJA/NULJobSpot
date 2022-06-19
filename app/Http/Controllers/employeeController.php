<?php

namespace App\Http\Controllers;

use App\Models\jobs;
use App\Models\User;
use App\Models\employee;
use App\Models\applications;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class employeeController extends Controller
{
    //create
    public function index(){
        $employees=employee::all();
        return view('employees.index',['employees'=>$employees]);
      
        
    }

    public function store(Request $request, applications $application){
        $formFields = $request->validate([
            'user_id',
            'uname',
            'job_id',
            'title',
        ]);
        $application = applications::find($application->id);
        $user = User::find($application->user_id);
       
        $jobs = jobs::find($application->jobs_id);
        $formFields['user_id']=$user->id;
        $formFields['uname']=$user->uname;
        $formFields['job_id']=$jobs->id;
        $formFields['title']=$jobs->title;
        employee::create($formFields);
        $applicationx = applications::where('user_id',$user->id)->delete();
        return redirect('/admin/home/employees/list')->with('message','Successfully Hired! Removing Application Instances...');
    }
    public function show(employee $employees){
        $employees = employee::find($employees->id);
        $user = User::find($employees->user_id);
        $jobs = jobs::find($employees->job_id);
        return view('employees.show',['employees'=>$employees,'users'=>$user,'jobs'=>$jobs]);
    }
    public function destroy(employee $employees)
    {
        
        $employees->delete();
        return redirect('/admin/home/employees/list')->with('message','Successfully Deleted');
    }
    public function edit(employee $employees){
        $employees = employee::find($employees->id);
        $user = User::find($employees->user_id);
        $jobs = jobs::find($employees->job_id);
        return view('employees.edit',['employees'=>$employees,'users'=>$user,'jobs'=>jobs::all()]);
    }
    public function update(Request $request, employee $employees){
        $employees = employee::find($employees->id);
        $user = User::find($employees->user_id);
        $jobs = jobs::find($employees->job_id);
        
        $formFields = $request->validate([
            'fname'=>['required'],
            'lname'=>['required'],
            'mname'=>['required'],
            'gender'=>['required'],
            'address'=>['required'],
            'birthdate'=>'required|date|before:18 years ago',
            'contact_number'=>['required','regex:((^(\+)(\d){12}$)|(^\d{11}$))',Rule::unique('users','contact_number')->ignore($user->id)],
            'civilstatus'=>'required',
            'email'=>['required','email', Rule::unique('users','email')->ignore($user->id)],
        ]);
        $user->update($formFields);
        $formFields2=$request->validate([
            'job_id'=>['required']
        ]);
        $employees->update($formFields2);
        return redirect('/admin/home/employees/list')->with('message','Employee Detail Successfully Updated!');
    }
}
