<form action="/direccion/eliminar/{{$direccion->id}}" method='POST'>
                            @csrf
                            @method('DELETE')
<input class="bg-danger" type="submit" name="submit" onclick="return confirm('¿Seguro que quieres eliminar la direccion?')" value="Eliminar">
</form>