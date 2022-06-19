@extends("admin.layouts.layout")
@section("content")
<section class="min-vh-100 pt-5 min-height: 100%;">
    <div class="container h-100">

          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">

      
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Editing {{$departments->department}}</p>
  
                  <form class="mx-1 mx-md-4" method="POST" action="edit/update" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                        <div class="col">
                            <label class="form-label" for="form3Example1c">New Department Name:</label>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                            <input type="text" id="form3Example1c" name="department"class="form-control" value="{{$departments->department}}" />
                            @error('department')
                            <p class="text-danger">{{$message}}</p>
                          @enderror
                          </div>
                        </div>
                         </div>

    
                        <div class="col">
                            <label class="form-label" for="form3Example1c">New Short Description:</label>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="descriptions" rows="3" value="{{$departments->descriptions}}"></textarea>
                            @error('descriptions')
                            <p class="text-danger">{{$message}}</p>
                          @enderror
                          </div>
                        </div>
                        <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example1c">Upload New Department Logo here:</label>
                      <input type="file" id="form3Example1c" name="department_logo"class="form-control" />
                      
                    @error('department_logo')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                    </div>
                         </div>
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4 mt-5">
                      <button type="submit" class="btn btn-dark btn-lg text-warning">Update</button>
                    </div>
  
                  </form>
  
                </div>
              
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection