@extends('layouts.hobbynew')
@section('main')
    <div class="login-name">
        仮会員登録確認
    </div>
    <p> {{$data['name']}} </p>
    <p> {{$data['email']}} </p>
    <p> {{$data['password']}} </p>
@endsection
