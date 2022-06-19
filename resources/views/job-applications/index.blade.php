@extends('admin.layouts.layout')
@section('content')
<div class="container">
  
<table class="table mt-5">
    @include('index._partials._admin-applicationsearch')
    @unless(count($applications)==0)
    <thead class="table-dark">
        <th>Application #</th>
        <th>Applicant Name</th>
        <th>Job ID </th>
        <th>Resume</th>
        <th>Action</th>
    </thead>
    <tbody>
   
        @foreach($applications as $application)
        <tr>
            <td>{{$application->id}}</td>
            <td>{{$application->uname}}</td>
            <td>{{$application->jobs_id}}</td>
            
            <td><a href="/admin/download/{{$application->resume}}" class="text-light btn btn-dark btn-sm">Download Resume</a></td>
            <td class="row row-cols-2 justify-content-end"> <a href="/admin/home/applications/{{$application->id}}" class="text-decoration-none">
                <h4 class="text-light btn btn-dark btn-sm">Review</h4>
            </a> 
                <form action="/admin/home/applications/{{$application->id}}/delete" method="POST">
                    @csrf
                    @method('DELETE')
                <button type="submit" class="text-light btn btn-dark btn-sm">Remove
                </form>
                </td>
            </tr>
        @endforeach
        @else
        <h1 class="text-dark text-center my-5 pt-5">No Applications found</h1>
        @endunless
       
    </tbody>
  </table>
</div>
@endsection