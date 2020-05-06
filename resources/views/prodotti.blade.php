@php
  $cards = config('dataprodotti'); // richiamo con config il file dataprodotti decode e lo assegno ad un var
  // dd($cards);
  $lunghe = [];
  $corte = [];
  $cortissime = [];

  foreach ($cards as $key => $card) {
    if ($card['tipo'] == 'lunga') {
      $lunghe[$key] = $card;
    }
    elseif ($card['tipo'] == 'corta') {
      $corte[$key] = $card;
    }
    elseif ($card['tipo'] == 'cortissima') {
      $cortissime[$key] = $card;
    }
  }
  // dd($lunghe, $corte, $cortissime);
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prodotti</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    @include('partials.header')
    @include('partials.main')
    @include('partials.footer')
  </body>
</html>
