<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tema;

class TemaController extends Controller
{
    function lista(){
        $temas=Tema::all();
        return view('tema',['temas' => $temas]);
    }
    function eliminar($id){
        Tema::destroy($id);
        return redirect()->back();
    }
    function crear(Request $request){
        $tema = new Tema();
        $tema->tema = $request->tema;
        $tema->save();
        return redirect('tema');
    }
    function botonEditar($id){
        $tema = Tema::find($id);
        return view('tema_editar',['tema' => $tema]);
    }
    function editar(Request $request, $id){
        $tema = Tema::find($id);
        $tema->tema = $request->tema;
        $tema->save();
        return redirect('/tema');
    }
}
