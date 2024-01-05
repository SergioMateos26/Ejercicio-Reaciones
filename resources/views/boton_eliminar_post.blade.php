<form action="/post/eliminar/{{$post->id}}" method='POST'>
                            @csrf
                            @method('DELETE')
<input class="bg-danger" type="submit" name="submit" onclick="return confirm('¿Seguro que quieres eliminar el post?')" value="Eliminar">
</form>