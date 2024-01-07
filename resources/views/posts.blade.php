@extends('welcome')

@section('crear_posts')
    <div>
        <br>
        <center><h1>Formulario para crear posts</h1></center>
        <hr>
        <br>
            <form action="/usuario/crear/post"  method="POST">
                @csrf
                <label for="usuarios">Usuario:
                    <select name="usuarios">
                        @foreach ($usuarios as $usuario)
                            <option value="{{$usuario->id}}">{{ $usuario->name }}</option>
                        @endforeach
                    </select>
                </label>
                <label for="tema">Temas:
                    <select name="tema">
                        @foreach ($temas as $tema)
                            <option value="{{$tema->id}}">{{ $tema->tema }}</option>
                        @endforeach
                    </select>
                </label>
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