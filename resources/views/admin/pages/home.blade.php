@extends('admin.layouts.layout')
@section('content')
<div class="container pt-5">
    <div class="row row-cols-1 row-cols-md-4 g-5">
        <div class="col">
            <a class ="text-decoration-none" href ="#">
            <div class="card text-white bg-dark my-3 pt-5 h-100 btn btn-dark" style="max-width: 18rem;" href="#">
                <div class="card-body">
                  <h5 class="card-title text-center">Manage Departments</h5>
                </div>
              </div>
            </a>
        </div>
        <div class="col">
            <a class ="text-decoration-none" href ="#">
            <div class="card text-white bg-dark my-3 pt-5 h-100 btn btn-dark" style="max-width: 18rem;" href="#">
                <div class="card-body">
                  <h5 class="card-title text-center">Manage Vacancies</h5>
                 
                </div>
              </div>
            </a>
        </div>
        <div class="col">
            <a class ="text-decoration-none" href ="#">
            <div class="card text-white bg-dark my-3 pt-5 h-100 btn btn-dark" style="max-width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title text-center">Job Applications</h5>
                </div>
              </div>
            </a>
        </div>
        <div class="col">
            <a class ="text-decoration-none" href ="#">
            <div class="card text-white bg-dark my-3 pt-5 h-100 btn btn-dark" style="max-width: 18rem;" href="#">
                <div class="card-body"> 
                  <h5 class="card-title text-center">NUL Employees</h5>
                </div>
              </div>
            </a>
        </div>
        <div class="col">
            <a class ="text-decoration-none" href ="#">
            <div class="card text-white bg-dark my-3 pt-5 h-100 btn btn-dark" style="max-width: 18rem;" href="#">
                <div class="card-body"> 
                  <h5 class="card-title text-center">Manage Admin Accounts</h5>
                </div>
              </div>
            </a>
        </div>
      </div>
</div>
@endsection
