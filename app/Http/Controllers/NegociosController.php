<?php

namespace App\Http\Controllers;

use App\Negocios;
use Illuminate\Http\Request;

class NegociosController extends Controller
{
    public function getNegocios()
    { 
        $negocios = Negocios::get();

        if ($negocios->isEmpty()) {
            return response('No se encontraron negocios', 404);
        }

        return response($negocios, 200);
    }

    public function getNegocioPorId($id)
    { 
        $negocios = Negocios::where('id', $id)->first();

        if (!$negocios) {
            return response()->json('No se encontró el negocio', 404);
        }

        return response()->json($negocios, 200);
    }

    public function postLogin(Request $request)
    { 
        $this->validate($request, [
            'negocios' => 'required',
        ]);

        $negocios = new Negocios();
        $negocios->fill($request->all());

        $guardado = $negocios->save();

        if ($guardado) {
            return response()->json('El negocio se ha logueado correctamente', 200);
        } else {
            return response()->json('El negocio no se ha logueado correctamente', 500);
        } 
    }

    public function postRegistro(Request $request)
    { 
        $this->validate($request, [
            'negocios' => 'required',
        ]);

        $negocios = new Negocios();
        $negocios->fill($request->all());

        $guardado = $negocios->save();

        if ($guardado) {
            return response()->json('El negocio se ha registrado correctamente', 200);
        } else {
            return response()->json('El negocio no se ha registro correctamente', 500);
        } 
    }

    public function putNegocio(Request $request)
    { 
        $this->validate($request, [
            'id' => 'required',
            'negocio' => 'required',
        ]);

        $negocios = Negocios::where('id', $request->id)->first();
        $negocios->fill($request->all());

        $resultado = $negocios - save();

        if ($resultado) {
            return response()->json('El negocio se ha actualizado', 200);
        }

        return response()->json('El negocio no se actualizó', 500); 
    }

    public function deleteNegocio($id)
    { 
        $eliminados = Negocios::where('id', $id)->delete();

        if (count($eliminados) > 0) {
            return response()->json('El negocio se eliminó', 200);
        }

        return response()->json('El negocio no se eliminó', 500);
    }
    
}
