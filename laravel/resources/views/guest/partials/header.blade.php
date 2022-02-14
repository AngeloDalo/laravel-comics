<header>
    <div class="container-fluid">
        <span>DC POWER VIZA</span>
        <span>ADDICTIONAL DC SITES</span>
    </div>
    <div class="container-header">
        <div class="image">
            <img src="{{asset('img\dc-logo.png')}}" alt="dc-logo">
        </div>
        <ul>
            <li class="{{ 'characters' === Route::currentRouteName() ? 'active' : '' }}"><a href="{{route('characters')}}">CHARACTERS</a></li>
            <li class="{{ 'comics' === Route::currentRouteName() ? 'active' : '' }}"><a href="{{route('comics')}}">COMICS</a></li>
            <li class="{{ 'movies' === Route::currentRouteName() ? 'active' : '' }}"><a href="{{route('movies')}}">MOVIES</a></li>
            <li class="{{ 'tv' === Route::currentRouteName() ? 'active' : '' }}"><a href="{{route('tv')}}">TV</a></li>
            <li class="{{ 'games' === Route::currentRouteName() ? 'active' : '' }}"><a href="{{route('games')}}">GAMES</a></li>
            <li class="{{ 'collectibles' === Route::currentRouteName() ? 'active' : '' }}"><a href="{{route('collectibles')}}">COLLECTIBLES</a></li>
            <li class="{{ 'videos' === Route::currentRouteName() ? 'active' : '' }}"><a href="{{route('videos')}}">VIDEOS</a></li>
            <li class="{{ 'fans' === Route::currentRouteName() ? 'active' : '' }}"><a href="{{route('fans')}}">FANS</a></li>
            <li class="{{ 'news' === Route::currentRouteName() ? 'active' : '' }}"><a href="{{route('news')}}">NEWS</a></li>
            <li class="{{ 'shop' === Route::currentRouteName() ? 'active' : '' }}"><a href="{{route('shop')}}">SHOP</a></li>
        </ul>
        <div class="search">
            Search
            <i class="fas fa-search"></i>
        </div>
    </div>
</header>
