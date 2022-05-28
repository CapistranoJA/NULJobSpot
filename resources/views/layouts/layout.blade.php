<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body>
<div class="container-fluid">
   <header class="row">
       @include('includes.header')
   </header>
   <div id="main" class="min-vh-100" style="height:100px;background-color:rgb(22,22,22);">
           @yield('content')
   </div>
   <footer>
       @include('includes.footer')
   </footer>
</div>
</body>
</html>
