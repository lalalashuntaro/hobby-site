<!DOCTYPE html>
<html lang="ja">
<head>
    <title>@yield('title')</title>
</head>
<body>
    @component('components.newheader')
        @slot('logo')
        hobby-site
        @endslot
        @slot('login')
        <button>ログイン</button>
        @endslot
    @endcomponent

<main>
    <div class="new-wrapper">
        @yield('main')
    </div>
</main>

<footer>

</footer>
</body>
</html>
