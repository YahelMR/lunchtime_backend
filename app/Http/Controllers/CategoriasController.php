<?php

namespace App\Http\Controllers;

use App\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{

    // Todas las categorias
    public function getCategorias()
    {
        $categorias = Categorias::get();

        if ($categorias->isEmpty()) {
            return response('No se encontraron categorías', 404);
        }

        return response($categorias, 200);
    }

    // Buscar por id
    public function getCategoriaPorId($id)
    {
        $categoria = Categoria::where('id', $id)->first();

        if (!$categoria) {
            return response()->json('No se encontró la categoría', 404);
        }

        return response()->json($categoria, 200);
    }

    // Crear
    public function postCategoria(Request $request)
    {
        //Aquí tienes que especificar todos los campos que vienen en la tabla
        $this->validate($request, [
            'categoria' => 'required',
        ]);

        $categoria = new Categoria();
        $categoria->fill($request->all());

        $guardado = $categoria->save();

        if ($guardado) {
            return response()->json('La categoría se guardó', 200);
        } else {
            return response()->json('No se pudo guardar la categoría', 500);
        }
    }

    //Actualizar
    public function putCategoria(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'categoria' => 'required',
        ]);

        $categoria = Categoria::where('id', $request->id)->first();
        $categoria->fill($request->all());

        $resultado = $categoria - save();

        if ($resultado) {
            return response()->json('La categoría se actualizó', 200);
        }

        return response()->json('La categoría no se actualizó', 500);
    }

    // Borrar
    public function deleteCategoria(Request $request)
    {
        $eliminados = Categoria::where('id', $request->id)->delete();

        if (count($eliminados) > 0) {
            return response()->json('La categoría se eliminó', 200);
        }

        return response()->json('La categoría no se eliminó', 500);
    }
}
