@extends("user.layouts.layout")
@section("content")
<section class="min-vh-100 pt-5" style="background-color: #eee; min-height: 100%;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
  
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Log In</p>
  
                  <form class="mx-1 mx-md-4" method="POST" action="/users/authentication">
                      @csrf
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="form3Example1c" name="uname"class="form-control" value="{{old('uname')}}" />
                        <label class="form-label" for="form3Example1c">Your Username</label>
                      @error('uname')
                        <p class="text-danger">{{$message}}</p>
                      @enderror
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" id="form3Example4c" name="password" class="form-control" value={} />
                        <label class="form-label" for="form3Example4c">Password</label>
                        @error('password')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>
                    </div>
  
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" class="btn btn-dark btn-lg text-warning">Login</button>
                    </div>
  
                  </form>
  
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2 justify-content-center">
  
                  <img src="{{url("/images/National_University_seal.png")}}"
                    class="img-fluid" alt="Sample image">
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection