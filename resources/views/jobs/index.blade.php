@extends('index.layouts.layout')
@section('recentlyadded')

<div class='container rounded-3 border border-secondary pb-2 pt-3 mb-5 '>
  <h3 class="text-light ms-3 pb-3">Latest Job Post</h3>
<div class="d-flex justify-content-center align-items-center flex-wrap">
  <div class="row justify-content-center ">
        @unless(count($jobs)==0)
        @foreach($jobs as $job)
        <div class="col">
          <div class="card" style="width: 18rem;height:100%;">
            <img class="col card-img-top" src="{{$job->jobs_logo ? asset('storage/'.$job->jobs_logo) : asset('/images/employee-hiring-484.jpg')}}" alt="Card image cap">
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
<div class="clearfix pt-5">
  <a href="/joblist" class="float-end">
    <h4 class="text-warning text-decoration-none">See More...</h4>
  </a> 

</div>
</div>


@endsection