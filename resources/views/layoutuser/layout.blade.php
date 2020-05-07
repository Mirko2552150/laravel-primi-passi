<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title>La Molisana - @yield('titolo')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://kit.fontawesome.com/e28dfdf91d.js" crossorigin="anonymous"></script>
    @yield('css')
  </head>
  <body>
    @include('partials.header')
    <main>
      @yield('main-content')
    </main>
    @include('partials.footer')

    @yield('scripts')
  </body>
</html>
