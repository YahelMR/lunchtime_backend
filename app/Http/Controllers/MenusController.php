<?php

namespace App\Http\Controllers;

use App\Menus;
use Illuminate\Http\Request;

class MenusController extends Controller
{
    public function getMenus()
    { 
        $menus = Menus::get();

        if ($menus->isEmpty()) {
            return response('No se encontron menus', 404);
        }

        return response($menus, 200);
    }

    public function getMenuPorId($id)
    { 
        $menus = Menus::where('id', $id)->first();

        if (!$menus) {
            return response()->json('No se encontró el menu', 404);
        }

        return response()->json($menus, 200);
    }

    public function postMenu(Request $request)
    { 
        $this->validate($request, [
            'menus' => 'required',
        ]);

        $menus = new Menus();
        $menus->fill($request->all());

        $guardado = $menus->save();

        if ($guardado) {
            return response()->json('El menu se ha guardado correctamente', 200);
        } else {
            return response()->json('El menu se ha guardado correctamente', 500);
        } 
    }

    public function putMenu(Request $request)
    { 
        $this->validate($request, [
            'id' => 'required',
            'menus' => 'required',
        ]);

        $menus = Menus::where('id', $request->id)->first();
        $menus->fill($request->all());

        $resultado = $menus - save();

        if ($resultado) {
            return response()->json('El menu se ha actualizado', 200);
        }

        return response()->json('El menu no se actualizó', 500);
    }

    public function deleteMenu($id)
    { 
        $eliminados = Clientes::where('id', $id)->delete();

        if (count($eliminados) > 0) {
            return response()->json('El menu se eliminó', 200);
        }

        return response()->json('El menu no se eliminó', 500);
    }
    
}
