@extends('welcome')

@section('crear_tema')
<div>
    <br>
    <center><h1>Formulario para crear Temas</h1></center>
    <hr>
    <br>
    <form action="tema/crear" method="POST">
        @csrf
        <label for="tema">Tema:
            <input type="text" name="tema">
        </label>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>
@endsection

@section('lista_temas')
<div>
    <center><h1>Lista de temas</h1></center>
    <hr>
    <br>
    <table border=1>
        <tr>
            <th>ID</th>
            <th>Tema</th>
            <th>Eliminar</th>
            <th>Editar</th>
        </tr>
@foreach($temas as $tema)
        <tr>
            <td>{{$tema->id}}</td>
            <td>{{$tema->tema}}</td>
            <td>@each('boton_eliminar_tema', [$tema], 'tema')</td>
            <td>@each('boton_editar_tema', [$tema], 'tema')</td>
        </tr>
@endforeach
    </table>
</div>
@endsection