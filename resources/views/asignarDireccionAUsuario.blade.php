@extends("welcome")

@section('asignar')
<div>
    <br>
    <center><h1>Formulario para asignar</h1></center>
    <hr>
    <br>
        <form action="/asignar" method="POST">
            @csrf
            <label for="direcciones">Direccion:</label>
                <select name="direcciones">
                    @foreach ($direcciones as $direccion)
                        <option value="{{$direccion->id}}">{{ $direccion->calle }}</option>
                    @endforeach
                </select>
            <label for= "usuarios">Usuario:</label>
                <select name="usuarios">
                    @foreach ($usuarios as $usuario)
                        <option value="{{$usuario->id}}">{{ $usuario->name }}</option>
                    @endforeach
                </select>
            <br>
            <input type="submit" name="submit" value="Asignar">
        </form>
</div>
@endsection

@section('lista_asignar')
    <div>
        <center><h1>Lista de Usuarios y Direcciones</h1></center>
        <hr>
        <br>
            <table border="1">
                <tr>
                    <td>Usuario</td>
                    <td>Calle</td>
                    <td>Numero</td>
                </tr>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->name }}</td>
                            @foreach ($direcciones as $direccion)
                                @if($direccion->usuario_id == $usuario->id)
                                    <td>{{$direccion->calle}}</td>
                                    <td>{{$direccion->numero}}</td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>   
        </div>
@endsection