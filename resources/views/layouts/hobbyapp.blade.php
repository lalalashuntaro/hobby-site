
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="" href="{{ asset('/favicon3.ico') }}">
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    @component('components.header')
        {{-- @slot('menu')
        <img src="{{ asset('/menu3.ico') }}" alt="メニュー画像" width="60px" height="60px">
        @endslot --}}

        @slot('logo')
        hobby-site
        @endslot

        @slot('list')
        <li><a href="">会員登録について</a></li>
        <li><a href="">トピックス</a></li>
        <li><a href="">利用規約</a></li>
        <li><a href="">お問い合わせ</a></li>
        @endslot
    @endcomponent

<main>
    <div class="main-wrapper">
    @yield('main')
    </div>
</main>

<footer>
    @component('components.footer')
        @slot('logo')
        <li><a href="https://twitter.com/share?"><i class="fab fa-twitter-square fa-3x"></i></a></li>
        <li><a href="https://www.facebook.com/share?"><i class="fab fa-facebook-square fa-3x"></i></a></li>
        <li><a href="https://line.me/R/msg/text/?"><i class="fab fa-line fa-3x"></i></a></li>
        <li><a href="https://www.instagram.com/?hl=ja"><i class="fab fa-instagram fa-3x"></i></a></li>
        @endslot

        @slot('name')
        lalala_s
        @endslot
        @endcomponent
</footer>
</body>
</html>
