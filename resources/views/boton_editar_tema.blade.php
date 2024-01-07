<form action="/tema/botonEditar/{{$tema->id}}" method='GET'>
                            @csrf
<input type="submit" name="submit" value="Editar">
</form>