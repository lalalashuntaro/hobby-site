
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HLS</title>
    <link rel="icon" type="" href="{{ asset('/favicon3.ico') }}">
    <link rel="stylesheet" href="{{ asset('/css/new.css') }}">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
    @extends('layouts.hobbynew')
    @section('main')
    <div class="login-name">
        仮会員登録完了
    </div>
        <div class="sentence">
            <p>登録ありがとうございます。</p>
            <p>
                本人確認のため、ご登録いただいたメールアドレスに、<br>
                本登録のご案内のメールが届きます。
            </p>
            <p>
                そちらに記載されているURLにアクセスして、<br>
                本登録をしてね(^^)
            </p>
        </div>
    @endsection
</body>
</html>
