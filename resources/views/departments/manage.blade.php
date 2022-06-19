@extends('admin.layouts.layout')
@section('content')
<div class="container">
  
<table class="table mt-5">
    <a href="/admin/home/departments/create" class="">
        <h4 class="text-light btn btn-dark btn-sm mt-2">Create Department</h4>
    </a>
    @include('index._partials._admin-departmentsearch')
    @unless(count($departments)==0)
    <thead class="table-dark">
        <th>Department ID</th>
        <th>Department Name</th>
        <th>Description</th>
        <th>Action</th>
    </thead>
    <tbody>
   
        @foreach($departments as $department)
        <tr>
            <td>{{$department->id}}</td>
            <td>{{$department->department}}</td>
            <td>{{$department->descriptions}}</td>
            <td class="row row-cols-2 justify-content-end"> <a href="/admin/home/departments/{{$department->id}}/edit" class="text-decoration-none">
                <h4 class="text-light btn btn-dark btn-sm">Edit</h4>
            </a> 
                <form action="/admin/home/departments/{{$department->id}}/delete" method="POST">
                    @csrf
                    @method('DELETE')
                <button type="submit" class="text-light btn btn-dark btn-sm">Delete
                </form>
                </td>
            </tr>
        @endforeach
      
        @else
        <h1 class="text-dark text-center my-5 pt-5">No Departments found</h1>
        @endunless
       
    </tbody>
    
  </table>
  <div> 
    {!! $departments->links('pagination::bootstrap-5') !!}
  </div>
</div>
@endsection