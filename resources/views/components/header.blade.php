<html>
    <head>
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    </head>
</html>

<div class="header-menu">
    <a href=""> {{$menu}} </a>
</div>
<div class="header">
    <div class="header-logo">
        <a href=""> {{$logo}} </a>
    </div>
    <div class="menu-list">
        <ul>
            {{$list}}
        </ul>
    </div>
</div>

