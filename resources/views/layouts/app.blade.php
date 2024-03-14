<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TheFashionDiary') }} </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/mainStyles.css')}}">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-blue-900 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'TheFashionDiary') }}
                    </a>
                </div>
                <nav class="space-x-4 text-white text-sm sm:text-base">
                    @guest
                    <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-white uppercase">{{ __('home') }}</a>
                <a href="{{url('/blog') }}" class="no-underline hover:underline text-sm font-normal text-white uppercase">{{__('Blog')}}</a>
                <a href="{{url('/Trends') }}" class="no-underline hover:underline text-sm font-normal text-white uppercase">{{__('Trends')}}</a>
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                        @endif
                    @else
                     <span>Welcome back</span><span>{{Auth::user()->name }}</span>
                     <a href="{{ url('/') }}" class="no-underline hover:underline text-sm font-normal text-white uppercase">{{ __('home') }}</a>
                <a href="{{url('/blog') }}" class="no-underline hover:underline text-sm font-normal text-white uppercase">{{__('Blog')}}</a>
                <a href="{{url('/Trends') }}" class="no-underline hover:underline text-sm font-normal text-white uppercase">{{__('Trends')}}</a>
                <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-white uppercase">{{ __('Dashboard') }}</a>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        @yield('content')
    </div>
    <div>
        @include('layouts.footer')
</div>
</body>
</html>
