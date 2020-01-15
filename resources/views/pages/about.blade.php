<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$title}}</title>
</head>

<body>
    <h1>About us</h1>
    <p>Our mission is to provide education, technical and professional training in the digital
        sector to young underprivileged people by leveraging their potential and willpower. We
        endeavour to truly develop their employability which will allow them and their families to
        escape poverty in a sustainable way, and contribute to the social and economic
        development of their countries.</p>
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