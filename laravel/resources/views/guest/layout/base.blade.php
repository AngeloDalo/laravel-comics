<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>@yield('documentTitle')</title>
</head>
<body>
  <div class="container-all">
    @include('guest.partials.header')

    @yield('content')

    @include('guest.partials.footer')
  </div>
  
  @yield('scripts')

</body>
</html>