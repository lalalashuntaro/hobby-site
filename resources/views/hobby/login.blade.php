<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HLS</title>
    <link rel="icon" type="" href="{{ asset('/favicon3.ico') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    @component('components.header')
        @slot('menu')
        <img src="{{ asset('/menu3.ico') }}" alt="メニュー画像" width="60px" height="60px">
        @endslot

        @slot('logo')
        hobby-site
        @endslot

        @slot('list')
        <li><a href="">会員登録について</a></li>
        <li><a href="">トピック</a></li>
        <li><a href="">利用規則</a></li>
        <li><a href="">お問い合わせ</a></li>
        @endslot
    @endcomponent

    <main>
        <div class="main-wrapper">

        </div>
    </main>

</html>
