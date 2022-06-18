@extends('user.layouts.layout')
@section('content')
   <div class = 'container-fluid bg-secondary '>
       <h1 class='h3 text-center text-light py-2 text-sm'>Jobs List for <span class="text-warning">{{$departments->department}}</span></h1>
   </div>
   <div class = 'container mt-5 min-vh-50'>
       <div id='jobcontainer' class='container border border-light rounded py-2'>
        <div class="row justify-content-center ">
            @foreach ($departments as $department)
                @foreach ($departments->jobs as $job)
                <div class="col">
                    <div class="card" style="width: 18rem;height:100%;">
                      <img class="col card-img-top" src="{{url('/images/employee-hiring-484.jpg')}}" alt="Card image cap">
                      <div class="col card-body">
                        <h5 class="col card-title">{{$job->title}}</h5>
                        <a href="/joblist/job/{{$job->id}}" class="col btn btn-dark mt-5">See More</a>
                      </div>
                    </div>
                  </div> 
                @endforeach
            @endforeach
          </div>
      </div> 
 </div>


        @endsection
