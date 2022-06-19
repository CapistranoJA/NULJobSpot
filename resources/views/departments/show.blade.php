@extends('user.layouts.layout')
@section('content')
   <div class = 'container-fluid bg-secondary '>
       <h1 class='h3 text-center text-light py-2 text-sm'>Jobs List for <span class="text-warning">{{$departments->department}}</span></h1>
   </div>
   <div class = 'container mt-5 min-vh-50'>
       <div id='jobcontainer' class='container border border-light rounded py-2'>
        <div class="row row-cols-4">
           @unless(count($departments->jobs)==0)
                @foreach ($departments->jobs as $job)
                <div class="col m-5">
                    <div class="card" style="width: 18rem;height:100%;">
                      <img class="col card-img-top" src="{{asset('storage/'.$job->jobs_logo) ?? asset('/images/employee-hiring-484.jpg')}}" alt="Card image cap">
                      <div class="col card-body">
                        <h5 class="col card-title">{{$job->title}}</h5>
                        <a href="/joblist/job/{{$job->id}}" class="col btn btn-dark mt-5">See More</a>
                      </div>    
                    </div>
                  </div> 
                @endforeach
                @else
                <h3 class="text-light">No listings found</h3>
                @endunless
       
          </div>
      </div> 
 </div>


        @endsection
