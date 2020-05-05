<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Main La Molisana</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <header>
      <img class="logo" src="{{'img/marchio-sito-test.png'}}" alt="La Molisana">
      <nav class="header-nav">
        <ul class="main-menu">
          <li><a href="{{route('index')}}">Home</a></li>
          <li><a href="{{route('prodotti')}}">Prodotti</a></li>
          <li><a href="#">Link</a></li>
        </ul>
      </nav>
    </header>
  </body>
</html>
