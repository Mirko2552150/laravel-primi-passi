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
{{-- Prendo il template, includo il partials.main e gli inserisco il PHP sopra  --}}
@extends('layoutuser.layout')

@section('titolo')
  Prodotti
@endsection

@section('css')
  {{-- css prodotti --}}
@endsection

@section('main-content')
  @include('partials.main')
@endsection
