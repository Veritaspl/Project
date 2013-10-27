<!DOCTYPE html>
<html ng-app="freestyle" lang="ru">
  <head>
    <meta charset="utf-8">
    <title>
        @yield('title')
    </title>
    <link href="{{ asset('assets/css/template.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox-1.3.4.css') }}" rel="stylesheet">

    <script src="{{ asset('assets/lib/jquery-1.9.1.js') }}"></script>
    <script src="{{ asset('assets/lib/jquery.fancybox-1.3.4.pack.js') }}"></script>
    <script src="{{ asset('assets/lib/angular.min.js') }}"></script>
    <script src="{{ asset('assets/lib/angular-resource.min.js') }}"></script>
    <script src="{{ asset('assets/js/angular/app.js') }}"></script>
    <script src="{{ asset('assets/js/angular/services.js') }}"></script>
    <script src="{{ asset('assets/js/angular/directives.js') }}"></script>
    <script src="{{ asset('assets/js/angular/controllers.js') }}"></script>
    <script src="{{ asset('assets/js/js.js') }}"></script>
  </head>

  <body>
  <div class='container'>
    @yield('content')
      <div id="footer">

      </div>
  </div>
  </body>
</html>