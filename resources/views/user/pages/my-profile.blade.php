@extends('user.layouts.layout')
@section('content')
   <div class = 'container-fluid bg-secondary '>
       <h1 class='h3 text-center text-light py-2 text-sm'>Welcome {{$users->uname}}</h1>
   </div>
   <div class = 'container mt-5 min-vh-50'>
       <div id='jobcontainer' class='container border border-light rounded py-2'>
        <h2 class="text-light">Applications List</h2>
        <table class="table text-light">
         
        @unless(count($users->applications)==0)
      
        <thead>
            <tr>
              <th scope="col">Application #</th>
              <th scope="col">Job Position</th>
              <th scope="col">Resume</th>
            </tr>
          </thead>
        @foreach($users->applications as $application)
        <tbody>
            <tr>
              <th scope="row">{{$application->id}}</th>
              <td><a href="/joblist/job/{{$application->jobs_id}}" class="">See Job Details</a></td>
              <td><a href="/download/{{$application->resume}}" class=""><h4 class="text-warning btn btn-dark btn-sm">Download Resume</h4></a></td>
            </tr>
  
        @endforeach

        @else
        <h2 class="text-light my-5">You do not have any applications</h2>
        <a href="/joblist" class="">
            <h4 class="text-warning btn btn-dark btn-lg">Apply Now??</h4>
        </a>
        @endunless
    </tbody>
</table>
    </div>
 </div>

@endsection