@extends('guest.layout.base')

@section('documentTitle')
  {{ $nomePagina }}
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('css/comic.css') }}">
@endsection

@section('content')
<main class="single-comic">
    <div class="jumbotron-comic">
        
    </div>
</main>
@endsection