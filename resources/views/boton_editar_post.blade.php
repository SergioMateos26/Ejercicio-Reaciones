<form action="/post/botonEditar/{{$post->id}}" method='GET'>
                            @csrf
<input type="submit" name="submit" value="Editar">
</form>