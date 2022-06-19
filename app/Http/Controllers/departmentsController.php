<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\Models\departments;
use Illuminate\Http\Request;

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
            'departments'=>departments::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(departments $departments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, departments $departments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function destroy(departments $departments)
    {
        //
    }
}
