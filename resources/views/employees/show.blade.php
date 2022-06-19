@extends('admin.layouts.layout')
@section('content')
<div class = 'container-fluid bg-dark '>
    <h1 class='h3 text-center text-light py-2 text-sm'>Employee Number # {{$employees->id}} Details</h1>
</div>
<form class="mx-1 mx-md-4" method="POST" action="/admin/home/employees/{{$employees->id}}" enctype="multipart/form-data">
    @csrf
    <div id='jobcontainer' class='container border border-light rounded py-2 text-light min-vh-100'>
        <h1 class="text-center pb-3 mt-5">Employee Details</h1> 
     <div class="row  p-5">
        <h3 class="text-start text-warning"> {{$users->lname}}, {{$users->fname}} {{$users->mname}}<span class="fst-italic text-secondary"> <small>(Lastname, Firstname Middlename)</small></span></h3> 
                <div class="col">
                <p class="fs-4 fw-bold p-1">User ID: <span class="text-warning fst-normal">{{$users->id}}</span></p>
                    <p name="uname" class="fs-4 fw-bold p-1">User Name: <span class="text-warning fst-normal">{{$users->uname}}</span></p>
                    <p class="fs-4 fw-bold p-1">Gender: <span class="text-warning fst-normal">{{$users->gender}}</span></p>
                <p class="fs-4 fw-bold p-1">Contact Number: <span class="text-warning fst-normal">{{$users->contact_number}}</span></p>
            <p class="fs-4 fw-bold p-1">Email: <span class="text-warning fst-normal">{{$users->email}}</span></p>
            <p class="fs-4 fw-bold p-1">Birthday: <span class="text-warning fst-normal">{{$users->birthdate}}</span></p>
                <p class="fs-4 fw-bold p-1">Civil Status: <span class="text-warning fst-normal">{{$users->civilstatus}}</span></p>
                <p class="fs-4 fw-bold p-1">Address: <span class="text-warning fst-normal">{{$users->address}}</span></p>
                    </div>


                    <div class="col">
                        <p class="fs-4 fw-bold p-1">Job ID: <span class="text-warning fst-normal">{{$jobs->id}}</span></p>
                            <p name="uname" class="fs-4 fw-bold p-1">Current Position: <span class="text-warning fst-normal">{{$jobs->title}}</span></p>
                            <p class="fs-4 fw-bold p-1">Department: <span class="text-warning fst-normal">{{$jobs->department}}</span></p>
                        <p class="fs-4 fw-bold p-1">Salary: <span class="text-warning fst-normal">{{$jobs->salary}}</span></p>
                    <p class="fs-4 fw-bold p-1">Qualifications: <span class="text-warning fst-normal">{{$jobs->qualifications}}</span></p>
                    <p class="fs-4 fw-bold p-1">Descriptions: <span class="text-warning fst-normal">{{$jobs->description}}</span></p>
                        <p class="fs-4 fw-bold p-1">Date Posted: <span class="text-warning fst-normal">{{$jobs->created_at}}</span></p>
                    </div>
                    <div >
                        <a href="/admin/home/employee/{{$employees->id}}/edit"class="text-decoration-none text-light btn btn-dark btn-lg align-self-end">Edit</a>
                            </div>
     </div>
    </div>
    
     
    </form>
     
   
    


@endsection