<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container-fluid">
      <a id='logotext'class="navbar-brand display-1 ms-5" href="#">
        NU-Laguna JobSpot(admin)
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
         
          <li class="nav-item">
            <button type="button" class="btn btn-outline-secondary btn-sm px-5 text-light fw-bold"><a class="nav-link active" href="/">Go To JobSpot</a></button>
          </li>
          <li class="nav-item">
            <form class="mx-1 mx-md-4" method="POST" action="/admin/logout">
              @csrf
              <button class="btn btn-outline-secondary btn-lg px-5 text-light fw-bold "type="submit">Logout</button>
            </form>
          </li>
          
        </ul>
        
      </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-black static-top">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto me-4">
      <li class="nav-item">
        <a class="nav-link h6 text-light" href="/admin/home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link h6 text-light" href="/admin/home/departments">Departments</a>
      </li>
 
      <li>
        <a class="nav-link h6 text-light" href="/login">Vacancy</a>
      </li>
      <li>
        <a class="nav-link h6 text-light" href="/">Job Applications</a>
      </li>

      
    
  </div>
  
</div>
</nav>
  
  