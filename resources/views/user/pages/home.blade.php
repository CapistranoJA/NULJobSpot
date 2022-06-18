@extends('user.layouts.layout')
@section('content')
   <div class = 'container-fluid bg-secondary '>
       <h1 class='h3 text-center text-light py-2 text-sm'>Quick Apply</h1>
   </div>
   <div class = 'container mt-5 min-vh-50'>
       <div id='jobcontainer' class='container border border-light rounded py-2'>
        <div class='container row align-items-center ms-1 pe-1 py-2 border-bottom'>
        <div class='col'>
        <div class="input-group rounded ">
           @include('index._partials._search')
        </div>
        </div>      
        </div>
        @unless(count($jobs)==0)
        @foreach($jobs as $job)
        <div class="container row row-cols-2 text-light">
          <div class="my-4 col"><img src="{{url('/images/employee-hiring-484.jpg')}}" class="rounded" style="width: 100%;"></div>
          <div class="mt-4 col-6">
              <h3 class="text-primary">{{$job->title}}</h3>
              <h5 class="fst-italic text-warning">{{$job->department}}</h5>
              <p>Description: {{$job->description}}</p>
              <a href="/joblist/job/{{$job->id}}" class="btn btn-dark justify-content-center">See Job Info</a>
          </div>
        </div>
        @endforeach
        @else
        <h3 class="text-light text-center p-5">No Jobs found</h3>
        @endunless
        <div> 
          {!! $jobs->links('pagination::bootstrap-5') !!}
        </div>
        </div>
      </div> 
 </div>


        @endsection
