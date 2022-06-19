@extends('admin.layouts.layout')
@section('content')
<div class="container">
  
<table class="table mt-5 table table-bordered">
    <a href="/admin/home/vacancy/create" class="">
        <h4 class="text-light btn btn-dark btn-sm mt-2">Create Job</h4>
    </a>
    @include('index._partials._admin-jobsearch')
    @unless(count($jobs)==0)
    <thead class="table-dark">
        <th>Job ID</th>
        <th>Job Name</th>
        <th>Salary</th>
        <th>Description</th>
        <th>Qualifications</th>
        <th>Job Department</th>
        <th>Action</th>
    </thead>
    <tbody>
   
        @foreach($jobs as $job)
        <tr>
            <td>{{$job->id}}</td>
            <td>{{$job->title}}</td>
            <td>{{$job->salary}}</td>
            <td>{{$job->description}}</td>
            <td>{{$job->qualifications}}</td>
            <td>{{$job->department}}</td>
            <td class> <a href="/admin/home/vacancy/{{$job->id}}/edit" class="text-decoration-none">
                <h4 class="text-light btn btn-dark btn-sm">Edit</h4>
            </a> 
                <form action="/admin/home/vacancy/{{$job->id}}/delete" method="POST">
                    @csrf
                    @method('DELETE')
                <button type="submit" class="text-light btn btn-dark btn-sm">Delete
                </form>
                </td>
            </tr>
        @endforeach
        @else
        <h1 class="text-dark text-center my-5 pt-5">No Jobs found</h1>
        @endunless
       
    </tbody>
  </table>
</div>
@endsection