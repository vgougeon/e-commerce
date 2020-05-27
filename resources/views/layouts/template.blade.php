<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Playzone') }}</title>

	<script src="{{ asset('js/app.js') }}" defer></script>
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <header class="{{ (request()->is('admin*')) ? 'admin-page' : '' }}">
        <div class="flex items-center">
        <a href="{{ route('/') }}">
            <div id="logo">
                <img src="{{ asset('imgs/logo.png') }}" />
                <h1 class="ml-2 p-0">PLAYZONE</h1>
            </div>
        </a>
        <div id="search-bar">
            <form action="{{ route('search') }}" method="POST" role="search">
                @method('POST')
                @csrf
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search" name="search" placeholder="Recherche..." />
                <button type="submit"><i class="fas fa-angle-double-right"></i></button>
            </form>
        </div>
        </div>
        @if(Auth::user())
        <div class="flex items-center user-info">
            <a href="{{ route('profile', ['id' => Auth::user()->id])}}" class="flex items-center user-profile">
            <div class="flex flex-col justify-center items-end leading-tight mr-3 ">
                <span class="font-semibold">{{ Auth::user()->name }}</span>
                <span class="text-xs muted">{{ number_format(Auth::user()->money, 2, ',', ' ') }}€</span>
            </div>
            <img src="https://api.adorable.io/avatars/60/{{ Auth::user()->name }}" />
            </a>
            @if(Auth::user()->is_admin == 1)
            <a href="{{ route('admin') }}">
            <button class="ml-3 soft">
                A
            </button>
            </a>
            @endif
            <a href="{{ route('cart.index') }}">
                <button class="ml-3 soft relative">
                    <div class="badge">{{ Cart::count() }}</div>
                    <i class="fas fa-shopping-basket"></i>
                </button>
            </a>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                <button class="ml-3 soft">
                    <i class="fas fa-sign-out-alt"></i>
                </button>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        @else
        <div class="flex items-center login-button mr-4">
            <a href="{{ route('login') }}" class="mr-4">Connexion</a>
            <a href="{{ route('register') }}">Inscription</a>
        </div>
        @endif
    </header>
    @yield('content')
    <script src="https://kit.fontawesome.com/9cdc6f314c.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>