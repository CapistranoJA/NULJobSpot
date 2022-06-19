@extends('admin.layouts.layout')

@section('content')
<section class="min-vh-100 pt-5" style="background-color: #eee; min-height: 100%;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
  
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Editing {{$employees->uname}}'s Information</p>
  
                  <form class="mx-1 mx-md-4" method="POST" action="/admin/home/employees/{{$employees->id}}/update">
                      @csrf
                      @method('PUT')
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="form3Example1c" name="fname"class="form-control" value="{{$users->fname}}"/>
                        <label class="form-label" for="form3Example1c">Update First Name</label>
                      @error('fname')
                        <p class="text-danger">{{$message}}</p>
                      @enderror
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="form3Example1c" name="lname"class="form-control" value="{{$users->lname}}"/>
                        <label class="form-label" for="form3Example1c">Update Last Name</label>
                      @error('lname')
                        <p class="text-danger">{{$message}}</p>
                      @enderror
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="form3Example1c" name="mname"class="form-control"value="{{$users->mname}}" />
                        <label class="form-label" for="form3Example1c">Update Middle Name</label>
                      @error('mname')
                        <p class="text-danger">{{$message}}</p>
                      @enderror
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <select class="form-select d-flex flex-row align-items-center mb-4" aria-label="Default select example" name="gender"value="@selected(old('gender'))">
                          <option selected="selected" value="">Update Gender</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          <option value="Other">Other</option>
                        </select>
                      @error('gender')
                        <p class="text-danger">{{$message}}</p>
                      @enderror
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="3" value="{{Request::old('address')}}"></textarea>
                        <label for="exampleFormControlTextarea1">Update Address</label>
                      @error('address')
                        <p class="text-danger">{{$message}}</p>
                      @enderror
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input id="startDate" class="form-control" name="birthdate"value="{{$users->birthdate}}" type="date" />
                        <span id="startDateSelected"></span>
                        <label for="startDate">Birthday</label>
                      @error('birthdate')
                        <p class="text-danger">{{$message}}</p>
                      @enderror
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="form3Example1c" name="contact_number"class="form-control"value="{{$users->contact_number}}" />
                        <label class="form-label" for="form3Example1c">Update Phone Number</label>
                      @error('contact_number')
                        <p class="text-danger">{{$message}}</p>
                      @enderror
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <select class="form-select d-flex flex-row align-items-center mb-4" aria-label="Default select example" name="civilstatus" value="">
                          <option selected="selected" value="">Update Civil Status</option>
                          <option value="Married">Married</option>
                          <option value="Single">Single</option>
                          <option value="Separated">Separated</option>
                          <option value="Divorced">Divorced</option>
                          <option value="Widowed/Widower">Widowed/Widower</option>
                        </select>
                      @error('civilstatus')
                        <p class="text-danger">{{$message}}</p>
                      @enderror
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="email" id="form3Example3c" name="email" class="form-control" value="{{$users->fname}}"/>
                        <label class="form-label" for="form3Example3c">Update Email</label>
                        @error('email')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>
                    </div>
                    
                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <select class="form-select d-flex flex-row align-items-center mb-4" aria-label="Default select example" name="job_id" value="">
                            <option selected="selected" value="">Current Position</option>
                            @foreach($jobs as $job)
                            <option value="{{$job->id}}">{{$job->title}}</option>
                            @endforeach
                          </select>
                        @error('job_id')
                          <p class="text-danger">{{$message}}</p>
                        @enderror
                        </div>
                      </div>
  
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" class="btn btn-dark btn-lg text-warning">Update</button>
                    </div>
  
                  </form>
  
                </div>
           
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection