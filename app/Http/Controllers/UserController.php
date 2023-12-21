<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function lista(){
        $usuarios=User::all();
        return view('usuario',['usuarios' => $usuarios]);
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
