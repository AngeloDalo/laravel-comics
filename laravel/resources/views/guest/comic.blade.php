@extends('guest.layout.base')

@section('documentTitle')
  {{ $nomePagina }}
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('css/comic.css') }}">
@endsection

@section('content')
  <div class="product__page">
      singolo prodotto
  </div>
@endsection