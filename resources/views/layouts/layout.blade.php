<!doctype html>
<html>
<head>
  <title>@yield('title', 'Marktplaats')</title>
    @include('includes.head')
    @include('includes.header')
</head>
<body>
  <div class="container-fluid text-center">



      <div id="main" class="row content">
        <div class='col-sm-2 sidenav'>
          @include('includes.sidebar')
        </div>

        <div class='col-sm-8 text-left'>

        @yield('content')
        </div>




      </div>



  </div>
</body>
</html>
