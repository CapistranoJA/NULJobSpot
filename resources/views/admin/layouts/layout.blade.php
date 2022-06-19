<!doctype html>
<html>
<head>
   @include('admin.includes.head')
</head>
<body>
<div class="container-fluid">
   <header class="row">
       @include('admin.includes.header')
   </header>
   <div id="main" class="min-vh-100" style="height:100px;background-color:rgb(250,250,255);">
           @yield('content')
   </div>
   
</div>
<footer>
    @include('admin.includes.footer')
</footer>
</body>
</html>
