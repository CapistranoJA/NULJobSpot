<!doctype html>
<html>
<head>
   @include('user.includes.head')
</head>
<body>
    @include('flash-message')
<div class="container-fluid">
    
   <header class="row">
       @include('user.includes.header')
   </header>
   <div id="main" class="min-vh-100" style="min-height: 100%; height: 100%;height: auto !important;background-color:rgb(22,22,22);margin: 0 auto -100px; position: relative;">
           @yield('content')
   </div>
   <div class="pt-5"style="height: 100px; width: 100%;">
       @include('user.includes.footer')
   </div>
</div>
</body>
</html>
