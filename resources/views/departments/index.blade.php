@extends('user.layouts.layout')
@section('content')
   <div class = 'container-fluid bg-secondary '>
       <h1 class='h3 text-center text-light py-2 text-sm'>Departments</h1>
   </div>
   <div class = 'container mt-5 min-vh-50'>   
      
            <div class="row row-cols-4">
                  @unless(count($departments)==0)
                  @foreach($departments as $department)
                  <div class="col m-5">
                    <div class="card bg-secondary" style="width: 18rem;height:100%;">
                      <img class="col card-img-top" src="{{url('/images/employee-hiring-484.jpg')}}" alt="Card image cap">
                      <div class="col card-body">
                        <h5 class="col card-title text-light">{{$department->department}}</h5>
                        <a href="/departments/{{$department->id}}" class="col btn btn-dark mt-5">See More</a>
                      </div>
                    </div>
                  </div> 
                  @endforeach
                 
                  @else 
                  <h3 class="text-light">No listings found</h3>
                  @endunless  
                </div>
       
   </div>

        @endsection
