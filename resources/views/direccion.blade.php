@extends('welcome')

@section('crear_direccion')
<div>
    <br>
    <center><h1>Formulario para crear direcciones</h1></center>
    <hr>
    <br>
    <form action="direccion/crear" method="POST">
        @csrf
        <label for="calle">Calle:
            <input type="text" name="calle">
        </label>
        <label for="numero">Numero:
            <input type="number" name="numero">
        </label>
        <label for="cod_postal">Codigo Postal:
            <input type="number" name="cod_postal">
        </label>
        <label for="municipio">Municipio:
            <input type="text" name="municipio">
        </label>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>
@endsection


@section('lista_direcciones')
<div>
    <center><h1>Lista de direcciones</h1></center>
    <hr>
    <br>
    <table border=1>
        <tr>
            <th>ID</th>
            <th>Calle</th>
            <th>Numero</th>
            <th>Codigo Postal</th>
            <th>Municipio</th>
            <th>Eliminar</th>
            <th>Editar</th>
        </tr>
@foreach($direcciones as $direccion)
        <tr>
            <td>{{$direccion->id}}</td>
            <td>{{$direccion->calle}}</td>
            <td>{{$direccion->numero}}</td>
            <td>{{$direccion->cod_postal}}</td>
            <td>{{$direccion->municipio}}</td>
            <td>@each('boton_eliminar_direccion', [$direccion], 'direccion')</td>
            <td>@each('boton_editar_direccion', [$direccion], 'direccion')</td>
        </tr>
@endforeach
    </table>
</div>
@endsection