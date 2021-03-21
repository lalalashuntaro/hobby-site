@extends('layouts.hobbynew')
@section('main')
    <div class="login-name">
        仮会員登録確認
    </div>
    <div class="confir">
        <p> {{$data['name']}} </p>
    </div>

    <div class="confir">
        <p> {{$data['email']}} </p>
    </div>

    <div class="button">
        <button class="next-button" type="submit">登録する</button>
        <button class="back-button">
            <a href="new">変更する</a>
        </button>
    </div>
@endsection
