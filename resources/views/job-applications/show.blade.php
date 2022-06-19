@extends('admin.layouts.layout')
@section('content')
<div class = 'container-fluid bg-dark '>
    <h1 class='h3 text-center text-light py-2 text-sm'>Applicant Number # {{$applications->id}} Details</h1>
</div>
<form class="mx-1 mx-md-4" method="POST" action="/admin/home/employees/{{$applications->id}}" enctype="multipart/form-data">
    @csrf
    <div id='jobcontainer' class='container border border-light rounded py-2 text-light min-vh-100'>
     <div class="row row-cols-2 p-3">
     <div class="col">
        <h1>Applicant Details<h1> 
            <p class="fs-4 fw-bold p-1">User ID:<span class="fs-4 text-warning fw-normal"> {{$users->id}}</span></p>
            <p name="uname" class="fs-4 fw-bold p-1">User Name:</sup><span class="fs-4 text-warning fw-normal"> {{$users->uname}}<span class='fst-italic'> ({{$users->fname}} {{$users->mname}} {{$users->lname}})</span></span></p>
            <p class="fs-4 fw-bold p-1">Gender:<span class="fs-4 text-warning fw-normal"> {{$users->gender}}</span></p>
            <p class="fs-4 fw-bold p-1">Contact Number: <span class="fs-4 text-warning fw-normal">{{$users->contact_number}}</span></p>
            <p class="fs-4 fw-bold p-1">Email: <span class="fs-4 text-warning fw-normal">{{$users->email}}</span></p>
            <p class="fs-4 fw-bold p-1">Birthday: <span class="fs-4 text-warning fw-normal">{{$users->birthdate}}</span></p>
            <p class="fs-4 fw-bold p-1">Civil Status: <span class="fs-4 text-warning fw-normal">{{$users->civilstatus}}</span></p>
            <p class="fs-4 fw-bold p-1">Address: <p class="fs-4 fw-normal"> {{$users->address}}</p></p>
    
            </div>
     <div class="col">   
        <h1>Job Details<h1> 
            <p class="fs-4 fw-bold p-1">Job ID:<span class="fs-4 text-warning fw-normal"> {{$jobs->id}}</span></p>
            <p name="title" class="display-6 text-primary">{{$jobs->title}}</p>
            <p class="fs-4 fw-bold p-1">Department:<span class="fs-4 text-warning fw-normal"> {{$jobs->department}}</span></p>
            <p class="fs-4 fw-bold p-1">Potential Salary: <span class="fs-4 fw-normal">₱ {{$jobs->salary}}</span></p>
            <p class="fs-4 fw-bold p-1">Qualifications/Work Experience: <p class="fs-4 fw-normal"> {{$jobs->qualifications}}</p></p>
            <p class="fs-4 fw-bold p-1">Job Description: <p class="fs-4 fw-normal"> {{$jobs->description}}</p></p>
            <p class="fs-4 fw-bold p-1">Date & Time Posted: <p class="fs-4 fw-normal"> {{$jobs->created_at}}</p></p>
            </div>
     </div>
     <div class="col justify-content-center mx-4 mb-3 mb-lg-4">
        <button type="submit" class="btn btn-light btn-lg text-dark">Hire</button>
      </div>
     </div>
    </form>
     
   
    
   </div> 
</div>
</div>
@endsection