@extends('guest.layout.base')

@section('documentTitle')
    Comics
@endsection

@section('content')
  <main class="products">
    <div class="jumbotron">
        <div class="current-series">CURRENT-SERIES</div>
    </div>
    <div class="container up">
        <div class="container-titles">
            @foreach ($comics as $comic)
                <div class="title">
                    <img class="title-image" src="{{$comic['thumb']}}" alt="">
                    <h2> {{$comic['title']}} </h2>
                </div>
            @endforeach
        </div>
        <button class="load-more">LOAD-MORE</button>
    </div>
    <div class="connections">
      <div class="container down">
          <img class="title-image" src="{{asset('img\cta-icons.png')}}" alt="">
      </div>
  </div>
  </main>
@endsection

@section('scripts')
  <script src="{{asset('js/app.js')}}"></script>
@endsection