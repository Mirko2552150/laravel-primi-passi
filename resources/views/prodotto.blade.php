@php
  $cards = config('dataprodotti'); // richiamo con config il file dataprodotti decode e lo assegno ad un var
  // dd($cards);
  $prodotto = $cards[$id];

@endphp
{{-- Prendo il template, includo il partials.main e gli inserisco il PHP sopra  --}}
@extends('layoutuser.layout')

@section('titolo')
  Prodotto
@endsection

@section('css')
  {{-- css prodotti --}}
@endsection

@section('main-content')
  <div class="box-prodotto">
    <img src="{{$prodotto['src']}}" alt="{{$prodotto['src']}}">
    <h3>{{$prodotto['titolo']}}</h3>
    <p><strong>Tipo: </strong></p>
    <p>{{$prodotto['tipo']}}</p>
    <p><strong>Tempo Cottura:</strong></p>
    <p>{{$prodotto['cottura']}}</p>
    <p><strong>Peso:</strong></p>
    <p>{{$prodotto['peso']}}</p>
    <p><strong>Descrizione:</strong></p>
    <p>{!!$prodotto['descrizione']!!}</p>
  </div>
@endsection
