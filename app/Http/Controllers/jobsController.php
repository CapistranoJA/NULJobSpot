<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\jobs;
use Illuminate\Validation\Rule;

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
}
