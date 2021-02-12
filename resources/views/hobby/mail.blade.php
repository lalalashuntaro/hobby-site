<!DOCTYPE html>
<html lang="en">
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
            <div class="new-wraaper">
                @foreach($items as $item)
                    <h1> {{$item -> name}} </h1>
                    <h2> {{$item -> mail}} </h2>
                @endforeach
            </div>
        @endsection
</body>
</html>
