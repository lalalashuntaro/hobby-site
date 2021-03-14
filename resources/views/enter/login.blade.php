@extends('layouts.hobbyapp')
@section('main')
    <div class="login-menu">
        <h1>ログイン</h1>
    <form action="" method="post">
        @csrf
        <div class="login-control">
            <input type="mail" placeholder="メールアドレス" style="padding-left: 15px;" name="email">
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


