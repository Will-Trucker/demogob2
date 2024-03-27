<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - @yield('titulo')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
        <nav>
            <a href="/">Principal</a>
            <a href="/alcaldia">Alcaldia</a>
            <a href="/departamento">Departamento</a>
            <a href="/aduana">Aduana</a>
        </nav>

        <h1>@yield('titulo')</h1>
        <hr>
        @yield('contenido')
    </body>
</html>
