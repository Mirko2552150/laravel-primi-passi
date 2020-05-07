@php
  $cards = config('dataprodotti'); // richiamo con config il file dataprodotti decode e lo assegno ad un var
  // dd($cards);
  $lunghe = [];
  $corte = [];
  $cortissime = [];

  // dd($lunghe, $corte, $cortissime);
@endphp

@extends('layoutadmin.layoutadmin')

@section('titolo')
  Prodotti
@endsection

@section('css')
  {{-- css prodotti --}}
@endsection

@section('main')
  <table>
    <thead>
      <tr>
        <th>Nome prodotto</th>
        <th>Descrizione</th>
        <th>Tipo</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($cards as $key => $prodotto)
        <tr>
          <td>{{$prodotto['titolo']}}</td>
          <td>{!!$prodotto['descrizione']!!}</td>
          <td>{{$prodotto['tipo']}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
