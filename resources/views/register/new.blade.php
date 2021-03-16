@extends('layouts.hobbynew')
@section('main')
    <div class="login-name">
        仮会員登録
    </div>
    <form action="/confirmation" method="post">
        @csrf
        <div class="control">
            <input type="text" placeholder="名前" style="padding-left: 15px;" name="name">
        </div>

        <div class="control">
            <input type="mail" placeholder="メールアドレス" style="padding-left: 15px;" name="email">
        </div>

        <div class="control">
            <input type="password" placeholder="パスワード" style="padding-left: 15px;" name="password" >
        </div>

        <div class="control-button">
            <button>登録</button>
        </div>
    </form>
@endsection
