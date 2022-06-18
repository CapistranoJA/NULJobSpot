<!doctype html>
<html>
<head>
   @include('index.includes.head')
</head>
<body>
    
<div class="container-fluid" style="overflow-x: hidden;">
   @include('flash-message')
   <header class="row">
       @include('index._partials._hero')
       @include('index.includes.header')

   </header>

   <div id="main" class="min-vh-100" style="min-height: 100%; height: 100%;height: auto !important;background-color:rgb(22,22,22);margin: 0 auto -100px; position: relative;">
        @include('index._partials._search')
        @include('index._partials._subhero')
       
        @yield('recentlyadded')

        @include('index._partials._anotherhero')
   </div>

<div class="pt-5"style="height: 100px; width: 100%;">
       @include('index.includes.footer')
</div>
</div>
</body>
</html>
