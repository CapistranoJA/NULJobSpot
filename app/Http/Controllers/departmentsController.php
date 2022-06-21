<?php
namespace App\Http\Controllers;

use App\Models\jobs;
use App\Models\employee;
use App\Models\departments;
use App\Models\applications;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class departmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('departments.index',[
            'departments'=>departments::latest()->filter(request(['search']))->paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departments.create');
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
            'department'=>['required','min:6'],
            'descriptions'=>'required',
            'department_logo'=>'image|mimes:jpg,png,jpeg,gif,svg|max:4098',
        ]);
        if($request->hasFile('department_logo')){
            $formFields['department_logo']=$request->file('department_logo')->store('images','public');
        }
        departments::create($formFields);
        return redirect('/admin/home/departments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function show (departments $department) {
        $department = departments::find($department->id);
 

        return view('departments.show',['departments'=>$department]);
    

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function edit(departments $department)
    {
        return view('departments.edit',['departments'=>$department]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, departments $department)
    {
        $formFields = $request->validate([
            'department'=>'required',
            'descriptions'=>'required',
            'department_logo'=>'image|mimes:jpg,png,jpeg,gif,svg|max:4098',
        ]);
        if($request->hasFile('department_logo')){
            $formFields['department_logo']=$request->file('department_logo')->store('images','public');
        }
        $department->update($formFields);
        
        return redirect('/admin/home/departments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function destroy(departments $department)
    {
        
       
        if(!is_null($jobs=jobs::where('dept_id',$department->id)->first())){
            $employees=employee::where('job_id', $jobs->id)->delete();
        }
        
        $department->jobs()->delete();
    
        $department->delete();
        return redirect('/admin/home/departments')->with('message','Successfully Deleted');
    }
    public function manage(){
        return view('departments.manage',[
            'departments'=>departments::latest()->filter(request(['search']))->paginate(10)
        ]);
    }
}
