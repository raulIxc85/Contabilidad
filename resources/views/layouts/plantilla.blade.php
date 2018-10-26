<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <!-- carga de fuentes awesome-->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/all.css') }}">

  </head>
  <body>
    @include('layouts.header.header')
    <section>
      @yield('content')
    </section>
  </body>
  <!-- scripts -->
  <script src="{{ asset('plugins/bootstrap/js/jquery-1.9.1.min.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
</html>
