<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Tema;

class PostController extends Controller
{
    public function lista()
    {
        $usuarios = User::all();
        $temas = Tema::all();       
        return view('posts', ['usuarios' => $usuarios, 'temas' => $temas]);
    }

    public function eliminar($id)
    {
        Post::destroy($id);
        return redirect()->back();
    }

    public function crear(Request $request)
    {
        $usuario = User::find($request->get('usuarios'));
        $tema = Tema::find($request->get('tema'));

        $post = $usuario->posts()->create([
            'titulo' => $request->get('titulo'),
            'texto' => $request->get('texto'),
        ]);

        $post->tema()->attach($tema);

        return redirect('/usuario');
    }

    public function botonEditar($id)
    {
        $post = Post::find($id);
        return view('post_editar',['post' => $post]);
    }

    public function editar(Request $request, $id)
    {
        $post = Post::find($id);
        $post->titulo = $request->titulo;
        $post->texto = $request->texto;
        $post->save();
        return redirect('/usuario');
    }
}
