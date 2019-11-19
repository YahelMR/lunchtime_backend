<?php

namespace App\Http\Controllers;

use App\Platillos;
use Illuminate\Http\Request;

class PlatillosController extends Controller
{
    public function getPlatillos()
    { 
        $platillos = Platillos::get();

        if ($platillos->isEmpty()) {
            return response('No se encontron platillos', 404);
        }

        return response($platillos, 200);
    }

    public function getPlatilloPorId($id)
    { 
        $platillos = Platillos::where('id', $id)->first();

        if (!$platillos) {
            return response()->json('No se encontró el platillo', 404);
        }

        return response()->json($platillos, 200);    
    }

    public function postPlatillo(Request $request)
    { 
        $this->validate($request, [
            'platillos' => 'required',
        ]);

        $platillos = new Platillos();
        $platillos->fill($request->all());

        $guardado = $platillos->save();

        if ($guardado) {
            return response()->json('El negocio se ha guardado correctamente', 200);
        } else {
            return response()->json('El negocio no se ha guardado correctamente', 500);
        } 
    }

    public function putPlatillo(Request $request)
    { 
        $this->validate($request, [
            'id' => 'required',
            'platillos' => 'required',
        ]);

        $platillos = Platillos::where('id', $request->id)->first();
        $platillos->fill($request->all());

        $resultado = $platillos - save();

        if ($resultado) {
            return response()->json('El platillo se ha actualizado', 200);
        }

        return response()->json('El platillo no se actualizó', 500);   
    }

    public function deletePlatillo($id)
    { 
        $eliminados = Platillos::where('id', $id)->delete();

        if (count($eliminados) > 0) {
            return response()->json('El platillo se eliminó', 200);
        }

        return response()->json('El platillo no se eliminó', 500);
    }

}
