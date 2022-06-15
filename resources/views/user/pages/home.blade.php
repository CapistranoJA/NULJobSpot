@extends('user.layouts.layout')
@section('content')
   <div class = 'container-fluid bg-secondary'>
       <h1 class='h3 text-center text-light py-2 text-sm'>Quick Apply</h1>
   </div>
   <div class = 'container mt-5'>
       <div id='jobcontainer' class='container border border-light rounded py-2'>
        <div class='container row align-items-center border-bottom ms-1 pe-1 py-2'>
        <div class='col'>
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                  Sort by
                </button>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                  <li><a class="dropdown-item active" href="#">Department Name</a></li>
                  <li><a class="dropdown-item" href="#">Time Posted</a></li>
                  <li><a class="dropdown-item" href="#">Job Postion</a></li>
                </ul>
              </div>
        </div>
        <div class='col'>
        <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
                <i class="bi bi-search"></i>
            </span>
          </div>
        </div>
           
        </div>

        <table class="table caption-top text-light ">
            <caption class='text-light'>Job List</caption>
            <thead>
              <tr class='text-primary'>
                <th scope="col"></th>
                <th scope="col">Date posted</th>
                <th scope="col">Job Position</th>
                <th scope="col">Job Department</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class='align-middle table-borderless'>
              <tr>
                <th scope="row"><img src='https://www.electrochem.org/wp-content/uploads/2019/02/iStock-Yellow-Hiring-Sign-min.jpg' class='img-thumbnail' width="100" height="100"></th>
                <td>5-29-2022</td>
                <td>Security Guard</td>
                <td>Security and Privacy Assurance Department</td>
                <td><a href="#"><button type="button" class="btn btn-secondary btn-sm text-light">Apply</button></a></td>
              </tr>
              <tr>
                <th scope="row"><img src='https://www.electrochem.org/wp-content/uploads/2019/02/iStock-Yellow-Hiring-Sign-min.jpg' class='img-thumbnail' width="100" height="100"></th>
                <td>5-29-2022</td>
                <td>School Nurse</td>
                <td>Health and Safety Department</td>
                <td><a href="#"><button type="button" class="btn btn-secondary btn-sm text-light">Apply</button></a></td>
              </tr>
              <tr>
                <th scope="row"><img src='https://www.electrochem.org/wp-content/uploads/2019/02/iStock-Yellow-Hiring-Sign-min.jpg' class='img-thumbnail' width="100" height="100"></th>
                <td>5-29-2022</td>
                <td>Computer Science Professor</td>
                <td>College of Computer Studies Department</td>
                <td><a href="#"><button type="button" class="btn btn-secondary btn-sm text-light">Apply</button></a></td>
              </tr>
              <tr>
                <th scope="row"><img src='https://www.electrochem.org/wp-content/uploads/2019/02/iStock-Yellow-Hiring-Sign-min.jpg' class='img-thumbnail' width="100" height="100"></th>
                <td>5-29-2022</td>
                <td>IT Specialist</td>
                <td>College of Computer Studies Department</td>
                <td><a href="#"><button type="button" class="btn btn-secondary btn-sm text-light">Apply</button></a></td>
              </tr>
            </tbody>
          </table>
      
        </div>






        </div>
    
   </div>
@endsection
