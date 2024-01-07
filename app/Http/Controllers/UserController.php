<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Tema;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function lista(){
        $usuarios=User::all();
        $posts = Post::all();
        $temas = Tema::all();
        $postsTemas = DB::select('SELECT * FROM post_tema'); 
        return view('usuario',['usuarios' => $usuarios], ['posts' => $posts])->with('postsTemas', $postsTemas)->with('temas', $temas);
    }
    function eliminar($id){
        User::destroy($id);
        return redirect()->back();
    }
    function crear(Request $request){
        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->save();
        return redirect('usuario');
    }
    function botonEditar($id){
        $usuario = User::find($id);
        return view('usuario_editar',['usuario' => $usuario]);
    }
    function editar(Request $request, $id){
        $usuario = User::find($id);
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->save();
        return redirect('/usuario');
    }
}
