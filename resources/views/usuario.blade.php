@extends('welcome')

@section('crear_usuario')
<div>
    <br>
    <center><h1>Formulario para crear usuario</h1></center>
    <hr>
    <br>
    <form action="usuario/crear" method="POST">
        @csrf
        <label for="name">Nombre:
            <input type="text" name="name">
            <p style="color:red">
                @error('name')
                {{ $message }}
                @enderror
            </p>
        </label>
        <label for="edad">Edad:
            <input type="number" name="edad">
            <p style="color:red">
                @error('name')
                {{ $message }}
                @enderror
            </p>
        </label>
        <label for="fecha_de_nacimiento">Fecha de nacimiento:
            <input type="date" name="fecha_de_nacimiento">
            <p style="color:red">
                @error('name')
                {{ $message }}
                @enderror
            </p>
        </label>
        <label for="gender">Gender:
            <select name="gender">
                <option value="masculino">masculino</option>
                <option value="femenino">femenino</option>
                <option value="otro">otro</option>
            </select>
            <p style="color:red">
                @error('name')
                {{ $message }}
                @enderror
            </p>
        </label>
        <label for="email">Email:
            <input type="email" name="email">
            <p style="color:red">
                @error('name')
                {{ $message }}
                @enderror
            </p>
        </label>
        <label for="password">Contraseña:
            <input type="password" name="password">
            <p style="color:red">
                @error('name')
                {{ $message }}
                @enderror
            </p>
        </label>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>
@endsection

@section('lista_usuario')
<div>
    <center><h1>Lista de Usuarios y sus Posts</h1></center>
    <hr>
    <br>
    <table border=1>
        @foreach($usuarios as $usuario)
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Eliminar</th>
            <th>Editar</th>
        </tr>
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->email}}</td>
            <td>@each('boton_eliminar_usuario', [$usuario], 'usuario')</td>
            <td>@each('boton_editar_usuario', [$usuario], 'usuario')</td>
        </tr>
        @foreach($posts as $post)
            @if($post->usuario_id == $usuario->id)
                <tr>
                    <th>Titulo</th>
                    <th>Texto</th>
                    <th>Eliminar</th>
                    <th>Editar</th>
                </tr>
                <tr>
                    <td>{{$post->titulo}}</td>
                    <td>{{$post->texto}}</td>
                    <td>@each('boton_eliminar_post', [$post], 'post')</td>
                    <td>@each('boton_editar_post', [$post], 'post')</td>
                </tr>

                <tr>
                    <th>Tema</th>
                </tr>
                @foreach($postsTemas as $postsTema)
                    @if($postsTema->post_id == $post->id)
                        <tr>
                            @foreach($temas as $tema)
                                @if($tema->id == $postsTema->tema_id)
                                    <td>{{$tema->tema}}</td>
                                @endif
                            @endforeach
                        </tr>
                    @endif
                @endforeach
            @endif
        @endforeach
        @endforeach
    </table>
</div>
@endsection
