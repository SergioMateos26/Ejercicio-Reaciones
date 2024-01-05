@extends('welcome')

@section('direccion_editar')
    <div>
        <br>
        <center><h1>Formulario para editar direccion</h1></center>
        <hr>
        <br>
        <form action="{{ url('direccion/editar/' . $direccion->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="calle">Calle:
                <input type="text" name="calle" value="{{ $direccion->calle }}">
            </label>
            <label for="numero">Numero:
                <input type="number" name="numero" value="{{ $direccion->numero }}">
            </label>
            <label for="cod_postal">Codigo Postal:
                <input type="number" name="cod_postal" value="{{ $direccion->cod_postal }}">
            </label>
            <label for="municipio">Municipio:
                <input type="text" name="municipio" value="{{ $direccion->municipio }}">
            </label>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
@endsection
