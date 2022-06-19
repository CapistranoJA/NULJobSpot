@extends("admin.layouts.layout")
@section("content")
<section class="min-vh-100 pt-5 min-height: 100%;">
    <div class="container h-100">

          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">

      
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Creating Vacancy</p>
  
                  <form class="mx-1 mx-md-4" method="POST" action="/admin/home/vacancy/create/save" enctype="multipart/form-data">
                      @csrf
                        <div class="col">
                            <label class="form-label" for="form3Example1c">Job Position:</label>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                            <input type="text" id="form3Example1c" name="title"class="form-control" value="{{old('title')}}" />
                            @error('title')
                            <p class="text-danger">{{$message}}</p>
                          @enderror
                          </div>
                        </div>
                         </div>
                         <div class="col">
                            <label class="form-label" for="form3Example1c">Salary:</label>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                            <input type="text" id="form3Example1c" name="salary"class="form-control" value="{{old('salary')}}" />
                            @error('salary')
                            <p class="text-danger">{{$message}}</p>
                          @enderror
                          </div>
                        </div>
                         </div>
                       
                              <select class="form-select d-flex flex-row align-items-center mb-4" aria-label="Default select example" name="dept_id" value="">
                                <option selected="selected" value="">Department</option>
                                @foreach($departments as $department)
                                <option value="{{$department->id}}">{{$department->department}}</option>
                                @endforeach
                              </select>
                            @error('department')
                              <p class="text-danger">{{$message}}</p>
                            @enderror
                      
    
                        <div class="col">
                            <label class="form-label" for="form3Example1c">Job Description:</label>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" value="{{Request::old('description')}}"></textarea>
                            @error('description')
                            <p class="text-danger">{{$message}}</p>
                          @enderror
                          </div>
                        </div>
                        <div class="col">
                            <label class="form-label" for="form3Example1c">Job Qualifications:</label>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="qualifications" rows="3" value="{{Request::old('qualifications')}}"></textarea>
                            @error('qualifications')
                            <p class="text-danger">{{$message}}</p>
                          @enderror
                          </div>
                        </div>
                        <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example1c">Upload Job Logo here:</label>
                      <input type="file" id="form3Example1c" name="jobs_logo"class="form-control" />
                      
                    @error('jobs_logo')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                    </div>
                         </div>
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4 mt-5">
                      <button type="submit" class="btn btn-dark btn-lg text-warning">Create</button>
                    </div>
  
                  </form>
  
                </div>
              
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection