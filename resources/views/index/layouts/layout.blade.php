<!doctype html>
<html>
<head>
   @include('index.includes.head')
</head>
<body>
    
<div class="container-fluid">
   <header class="row">
       @include('index._partials._hero')
       @include('index.includes.header')

   </header>
   <div id="main" class="min-vh-100" style="height:100px;background-color:rgb(22,22,22);">
        @include('index._partials._search')
        @include('index._partials._subhero')
            @yield('content')
   </div>
   <footer>
       @include('index.includes.footer')
   </footer>
</div>
</body>
</html>
