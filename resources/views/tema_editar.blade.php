@extends('welcome')

@section('tema_editar')
    <div>
        <br>
        <center><h1>Formulario para editar Temas</h1></center>
        <hr>
        <br>
        <form action="{{ url('tema/editar/' . $tema->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="tema">Tema:
                <input type="text" name="tema" value="{{ $tema->tema }}">
            </label>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
@endsection