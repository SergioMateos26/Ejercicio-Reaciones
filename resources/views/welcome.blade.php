<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
        <style>
            body{
                max-width: 900px !important;
            }
        </style>
    </head>
    <body class="antialiased">
        <center><h1>Sergio Mateos Lozano</h1></center>
        <nav>
            <ul>
                <a href="/usuario"><button>Usuario</button></a>
                <a href="/direccion"><button>Direccion</button></a>
                <a href="/lista/asignar"><button>Asignar</button></a>
                <a href="/usuario/lista/post"><button>Post</button></a>
                <a href="/tema"><button>Tema</button></a>
            </ul>
        </nav>
        @yield('crear_usuario')
        @yield('lista_usuario')
        @yield('usuario_editar')
        @yield('crear_direccion')
        @yield('lista_direcciones')
        @yield('direccion_editar')
        @yield('asignar')
        @yield('lista_asignar')
        @yield('crear_posts')
        @yield('post_editar')
        @yield('crear_tema')
        @yield('lista_temas')
        @yield('tema_editar')
    </body>
</html>
