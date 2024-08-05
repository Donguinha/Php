<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <!-- <script src="app.js" href ></script> -->

</head>

<body>
    <header>
        <h1>Meu Site</h1>
        <nav>
            <!-- Links de navegação -->
        </nav>
    </header>

    @yield('content')

    <footer>
        <p>© 2024 Meu Site</p>
    </footer>
</body>

</html>