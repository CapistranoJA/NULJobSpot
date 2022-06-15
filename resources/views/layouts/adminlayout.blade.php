<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body>
<div class="container-fluid">
   <header class="row">
       @include('includes.adminheader')
   </header>
   <div id="main" class="min-vh-100" style="height:100px;background-color:rgb(250,250,255);">
           @yield('content')
   </div>
   
</div>
<footer>
    @include('includes.adminfooter')
</footer>
</body>
</html>
