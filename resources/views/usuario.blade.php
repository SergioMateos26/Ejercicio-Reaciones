@extends('welcome')

@section('crear_usuario')
<div>
    <br>
    <center><h1>Formulario para crear usuario</h1></center>
    <hr>
    <br>
    <form action="usuario/crear" method="POST">
        @csrf
        <label for="name">Nombre:
            <input type="text" name="name">
        </label>
        <label for="email">Email:
            <input type="email" name="email">
        </label>
        <label for="password">Contraseña:
            <input type="password" name="password">
        </label>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>
@endsection


@section('lista_usuario')
<div>
    <center><h1>Lista de usuarios</h1></center>
    <hr>
    <br>
    <table border=1>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Eliminar</th>
            <th>Editar</th>
        </tr>
@foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->email}}</td>
            <td>@each('boton_eliminar_usuario', [$usuario], 'usuario')</td>
            <td>@each('boton_editar_usuario', [$usuario], 'usuario')</td>
        </tr>
@endforeach
    </table>
</div>
@endsection