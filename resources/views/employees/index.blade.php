@extends('admin.layouts.layout')
@section('content')
<div class="container">
  
<table class="table mt-5">
    @include('index._partials._admin-employeesearch')
    @unless(count($employees)==0)
    <thead class="table-dark">
        <th>Employee ID</th>
        <th>Employee User Name</th>
        <th>Job Position </th>
        <th>Details</th>
        <th>Action</th>
    </thead>
    <tbody>
   
        @foreach($employees as $employee)
        <tr>
            <td>{{$employee->id}}</td>

            <td>{{$employee->uname}}</td>
            <td>{{$employee->title}}</td>
            <td><a href="/admin/home/employee/{{$employee->id}}" class="text-decoration-none">
                <h4 class="text-light btn btn-dark btn-sm">View</h4></td>
            
            <td> 
            </a> 
                <form action="/admin/home/employee/{{$employee->id}}/delete" method="POST">
                    @csrf
                    @method('DELETE')
                <button type="submit" class="text-light btn btn-dark btn-sm">Remove
                </form>
                </td>
            </tr>
        @endforeach
        @else
        <h1 class="text-dark text-center my-5 pt-5">No Employees found</h1>
        @endunless
       
    </tbody>
  </table>
</div>
@endsection