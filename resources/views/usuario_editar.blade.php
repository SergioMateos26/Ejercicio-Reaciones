@extends('welcome')

@section('usuario_editar')
    <div>
        <br>
        <center><h1>Formulario para editar usuario</h1></center>
        <hr>
        <br>
        <form action="{{ url('usuario/editar/' . $usuario->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Nombre:
                <input type="text" name="name" value="{{ $usuario->name }}">
            </label>
            <label for="email">Email:
                <input type="email" name="email" value="{{ $usuario->email }}">
            </label>
            <label for="password">Contraseña:
                <input type="password" name="password" value="{{ $usuario->password }}">
            </label>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
@endsection
