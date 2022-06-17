@extends('index.layouts.layout')
@section('recentlyadded')

<div class='container rounded-3 border border-secondary pb-5 pt-3 mb-5 '>
  <h3 class="text-light ms-3 pb-3">Featured Jobs</h3>

<div class="d-flex justify-content-center align-items-center flex-wrap">
  <div class="row justify-content-center ">
        @unless(count($jobs)==0)
        @php
           $i=0;
        @endphp
        @foreach($jobs as $job)
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{url('/images/employee-hiring-484.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$job->title}}</h5>
              <p class="card-text">{{$job->description}}</p>
              <a href="/job/{{$job->id}}" class="btn btn-dark">Apply</a>
            </div>
          </div>
        </div>
        @if(++$i==3) 
            @break
        @endif
      
        @endforeach
        @else 
        <p>No listings found</p>
        @endunless  
      </div>
</div>
</div>

@endsection