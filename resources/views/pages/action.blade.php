<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$title}}</title>
</head>

<body>
    <h1>Our actions in Cambodia</h1>
    <p>Passerelles numériques Cambodia was the first project to be launched in 2005, in
        Phnom Penh. PNC offers two IT training programs in System and Network
        Administration (SNA) and Web Programming (WEP), based on a holistic educative
        approach including technical and soft skills, and a personal development program</p>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif
    </div>
</body>

</html>