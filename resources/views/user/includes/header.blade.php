<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container-fluid">
      <a id='logotext'class="navbar-brand display-1" href="#">
        JobSpot
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <button type="button" class="btn btn-outline-secondary btn-sm me-3 px-5"><a class="nav-link active" aria-current="page" href="/">Home</a></button>
          </li>
          <li class="nav-item">
            <button type="button" class="btn btn-outline-secondary btn-sm px-5 text-light "><a class="nav-link active" href="/departments/">Departments</a></button>
          </li>
        </ul>
        
      </div>
      
    </div>
  </nav>
  <nav class="navbar navbar-expand-lg navbar-dark bg-black static-top">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto me-4">
          <li class="nav-item">
            <a class="nav-link h6 text-light" href="/">About</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link h6 text-light" href="/my-profile">Profile</a>
          </li>
          <li class="nav-item">
            <form class="mx-1 mx-md-4" method="POST" action="/logout">
              @csrf
              <button class="btn btn-outline-secondary btn-sm px-5 text-light "type="submit">Logout</button>
            </form>
          </li>
        </ul>
        @else
          <li>
            <a class="nav-link h6 text-light" href="/login">Login</a>
          </li>
          <li>
            <a class="nav-link h6 text-light" href="/register">Register</a>
          </li>
        @endauth
          
        
      </div>
      
    </div>
  </nav>
  
  