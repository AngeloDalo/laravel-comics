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
        <div class="current-series">
            <div class="comic-book">
                {{$comic['type']}}
            </div>
            <img class="title-image" src="{{$comic['thumb']}}" alt="">
            <button>view gallery</button>
        </div>
    </div>
    <div class="jumbotron-bluDC">
    </div>
    <div class="comic-show">
        <div class="description">
            <h1>{{ $comic['title'] }}</h1>
            <div class="price-available">
                <div class="price">
                    U.S. Price: <span>{{ $comic['price'] }}</span>
                </div>
                <div class="available">
                    available
                </div>
                <button>Check Availability</button>
            </div>
            <p>{{ $comic['description'] }}</p>
        </div>
        <div class="adv">
            <span>advertisement</span>
            <img src="{{asset('img/adv.jpg')}}" alt="">
        </div>
    </div>
    <div class="content">
        <div class="talent">
            <h2>Talent</h2>
            <div class="art-by">
                <span>Art by:</span>
                @foreach ($comic['writers'] as $writer)
                {{ $writer }}
                @endforeach
            </div>
            <div class="written-by">
                <span>Written by</span>
                @foreach ($comic['writers'] as $writer)
                {{ $writer }}
                @endforeach
            </div>
        </div>
        <div class="specs">
            <h2>Specs</h2>
            <p>Series: <span class="blue">{{$comic['series']}}</span></p>
            <p>U.S. Price: <span>{{$comic['price']}}</span></p>
            <p>On Sale Date: <span>{{$comic['sale_date']}}</span></p>
        </div>
    </div>
    <div class="connections">
        <div class="container down">
            <img class="title-image" src="{{asset('img\cta-icons.png')}}" alt="">
        </div>
    </div>
</main>
@endsection