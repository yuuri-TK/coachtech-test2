<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Fashionablylate</title>

    <a class="header__link" href="/register">register
    </a>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>

    <header class="header">
        <h1 class="logo">Fashionablylate</h1>
    </header>

    <main>
        @yield('content')
    </main>

</body>
</html>