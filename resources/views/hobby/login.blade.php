<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HLS</title>
    <link rel="icon" type="" href="{{ asset('/favicon3.ico') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
    <main>
        @extends('layouts.hobbyapp')
        @section('main')
            <div class="login-menu">
                <h1>ログイン</h1>
            <form action="" method="post">
                @csrf
                <div class="login-control">
                    <input type="text" placeholder="メールアドレス" style="padding-left: 15px;" name="email">
                </div>
                <div class="login-control">
                    <input type="pasword" placeholder="パスワード" style="padding-left: 15px;" name="pasword">
                </div>
                <div class="login-button">
                    <button type="submit" value="send" style="color:white; height: 58px; width: 301px; background-color: #da70d6; font-size: 20px;">ログイン</button>
                </div>
            </form>
            </div>
            <div class="new">
                <p>初めてご利用の方</p>
                <a href="/new">新規会員登録</a>
            </div>
        @endsection
    </main>
</body>
</html>
