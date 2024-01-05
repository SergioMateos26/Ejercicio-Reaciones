<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;


class PostController extends Controller
{
    public function lista()
    {
        $usuarios = User::all();       
        return view('posts', ['usuarios' => $usuarios]);
    }
    function eliminar($id){
        Post::destroy($id);
        return redirect()->back();
    }
    public function crear(Request $request)
    {
        $usuario = User::find($request->get('usuarios'));
        $usuario->posts()->create([
            'titulo' => $request->get('titulo'),
            'texto' => $request->get('texto'),
        ]);
        return redirect('/usuario');
    }
    function botonEditar($id){
        $post = Post::find($id);
        return view('post_editar',['post' => $post]);
    }
    function editar(Request $request, $id){
        $post = Post::find($id);
        $post->titulo = $request->titulo;
        $post->texto = $request->texto;
        $post->save();
        return redirect('/usuario');
    }
}
