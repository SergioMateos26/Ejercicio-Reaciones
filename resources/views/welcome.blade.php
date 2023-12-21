<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
        <style>
            body{
                max-width: 830px !important;
            }
        </style>
    </head>
    <body class="antialiased">
        <nav>
            <ul>
                <a href="/usuario"><button>Usuario</button></a>
            </ul>
        </nav>
        @yield('crear_usuario')
        @yield('lista_usuario')
        @yield('usuario_editar')
    </body>
</html>
