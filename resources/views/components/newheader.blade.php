<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="" href="{{ asset('/favicon3.ico') }}">
    <link rel="stylesheet" href="{{ asset('/css/register.css') }}">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>
    <div class="header">
        <div class="header-logo">
            <a href=""> {{$logo}} </a>
        </div>
        <div class="login-button">
            <a href="/login"> {{$login}} </a>
        </div>
    </div>
</html>
