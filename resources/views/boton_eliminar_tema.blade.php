<form action="/tema/eliminar/{{$tema->id}}" method='POST'>
                            @csrf
                            @method('DELETE')
<input class="bg-danger" type="submit" name="submit" onclick="return confirm('¿Seguro que quieres eliminar el tema?')" value="Eliminar">
</form>