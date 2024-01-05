@extends('welcome')

@section('post_editar')
    <div>
        <br>
        <center><h1>Formulario para editar post</h1></center>
        <hr>
        <br>
        <form action="{{ url('post/editar/' . $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="titulo">Titulo:
                <input type="text" name="titulo" value="{{ $post->titulo }}">
            </label>
            <label for="texto">Texto:
                <input type="textarea" name="texto" value="{{ $post->texto }}">
            </label>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
@endsection