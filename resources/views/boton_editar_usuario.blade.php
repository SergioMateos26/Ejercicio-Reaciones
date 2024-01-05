<form action="/usuario/botonEditar/{{$usuario->id}}" method='GET'>
                            @csrf
<input type="submit" name="submit" value="Editar">
</form>