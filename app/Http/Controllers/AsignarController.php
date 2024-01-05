<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Direccion;

class AsignarController extends Controller
{
    public function lista()
    {
        $direcciones = Direccion::all();
        $usuarios = User::all();        
        return view('asignarDireccionAUsuario', ['direcciones' => $direcciones] , ['usuarios' => $usuarios]);
    }

    public function asignar(Request $request){
        $usuarioAsignado = User::find($request->get('usuarios'));
        $direccionAsignada = Direccion::find($request->get('direcciones'));
        $usuarioAsignado->direccion()->save($direccionAsignada);
        return redirect('/lista/asignar');
    }
}
