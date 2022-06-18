@extends('user.layouts.layout')
@section('content')
   <div class = 'container-fluid bg-secondary '>
       <h1 class='h3 text-center text-light py-2 text-sm'>{{$jobs->title}} Application Details</h1>
   </div>
   <div class = 'container mt-5'>
    <a href="/joblist" class="">
        <h4 class="text-warning btn btn-secondary btn-lg">Go back</h4>
    </a> 
       <div id='jobcontainer' class='container border border-light rounded py-2 text-light min-vh-100'>
        <div class="row row-cols-2 p-3">
        <div class="col">
        <h1>Job Details<h1> 
        <p class="display-6 text-primary">{{$jobs->title}}</p>
        <p class="fs-4 fw-bold p-1">Department:<span class="fs-4 text-warning fw-normal"> {{$jobs->department}}</span></p>
        <p class="fs-4 fw-bold p-1">Potential Salary: <span class="fs-4 fw-normal">₱ {{$jobs->salary}}</span></p>
        <p class="fs-4 fw-bold p-1">Qualifications/Work Experience: <p class="fs-4 fw-normal"> {{$jobs->qualifications}}</p></p>
        <p class="fs-4 fw-bold p-1">Job Description: <p class="fs-4 fw-normal"> {{$jobs->description}}</p></p>
        <p class="fs-4 fw-bold p-1">Date & Time Posted: <p class="fs-4 fw-normal"> {{$jobs->created_at}}</p></p>
        </div>
        <div class="col">
            <div class=""><img src="{{url('/images/employee-hiring-484.jpg')}}" class="rounded" style="width: 100%;"></div>
        </div>
        </div>
        <div class="clearfix my-3 py-3 d-flex align-items-center justify-content-center">
            @if (Auth::check()) 
                <form class="mx-1 mmx-md-4" method="POST" action="/application">
                    @csrf
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example1c">Upload your Resume here:</label>
                      <input type="file" id="form3Example1c" name="resume"class="form-control" />
                      
                    @error('resume')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                    </div>
                  </div>
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-dark btn-lg text-warning">Apply</button>
                  </div>
                </form>
            
            @else
            <a href="/register" class="">
                <h4 class="text-warning btn btn-dark btn-lg">Register Now To Apply</h4>
            </a>
           
         
          
          </div>
          <a href="/login" class="text-center mb-3">
            <p class="text-warning">Have an account?</p>
        </a>
      </div> 
      @endif
 </div>


        @endsection
