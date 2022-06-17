<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jobs;
use Illuminate\Validation\Rule;

class jobsController extends Controller
{
    //preview
    public function preview(){
        return view('jobs.index',['jobs'=>jobs::all()]);

    }
    public function show (jobs $job) {
        return view('jobs.show',['jobs'=>$job]);
    }
}
