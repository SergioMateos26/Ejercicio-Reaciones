@extends('welcome')

@section('crear_posts')
    <div>
        <br>
        <center><h1>Formulario para crear posts</h1></center>
        <hr>
        <br>
            <form action="/usuario/crear/post"  method="POST">
                @csrf
                <label for= "usuarios">Usuario:</label>
                <select name="usuarios">
                    @foreach ($usuarios as $usuario)
                        <option value="{{$usuario->id}}">{{ $usuario->name }}</option>
                    @endforeach
                </select>
                <label for="titulo">Titulo:
                    <input type="text" name="titulo">
                </label>
                <label for="texto">Texto:
                    <input type="textarea" name="texto">
                </label>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
@endsection