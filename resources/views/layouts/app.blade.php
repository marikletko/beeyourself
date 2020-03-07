<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href='../../public/static/images/bee.png'/>
    <link rel="stylesheet" href='../../public/static/css/styles.css'>
    <title>Bee Yourself</title>
</head>
<body>
    <h1>Bee Yourself</h1>
    <div class="Verification">
        <a href="{{ route('login') }}">Вход</a>
        <a href="{{ route('register') }}">Регистрация</a>
    </div>
    @yield('content')
    <ul class="additive-info">
        <li href="#">Про BeeYourself</li>
        <li href="#">Написать разработчику</li>
    </ul>
</body>
</html>
