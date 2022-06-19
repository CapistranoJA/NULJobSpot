<!doctype html>
<html>
<head>
   @include('admin.includes.head')
</head>
<body>
    @include('flash-message')
<div class="container-fluid">
    
   <header class="row">
       @include('admin.includes.header')
   </header>
   <a href="{{ url()->previous() }}" class="">
    <h4 class="text-light btn btn-dark btn-sm mt-2">Go Back</h4>
    </a>
   <div id="main" class="min-vh-100" style="min-height: 100%; height: 100%;height: auto !important;background-color:white;margin: 0 auto -100px; position: relative;">
           @yield('content')
   </div>
   <div class="pt-5"style="height: 100px; width: 100%;">
       @include('admin.includes.footer')
   </div>

</body>
</html>
