<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direccion;

class DireccionController extends Controller
{
    function lista(){
        $direcciones=Direccion::all();
        return view('direccion',['direcciones' => $direcciones]);
    }
    function eliminar($id){
        Direccion::destroy($id);
        return redirect()->back();
    }
    function crear(Request $request){
        $direccion = new Direccion();
        $direccion->calle = $request->calle;
        $direccion->numero = $request->numero;
        $direccion->cod_postal = $request->cod_postal;
        $direccion->municipio = $request->municipio;
        $direccion->save();
        return redirect('direccion');
    }
    function botonEditar($id){
        $direccion = Direccion::find($id);
        return view('direccion_editar',['direccion' => $direccion]);
    }
    function editar(Request $request, $id){
        $direccion = Direccion::find($id);
        $direccion->calle = $request->calle;
        $direccion->numero = $request->numero;
        $direccion->cod_postal = $request->cod_postal;
        $direccion->municipio = $request->municipio;
        $direccion->save();
        return redirect('/direccion');
    }
}
