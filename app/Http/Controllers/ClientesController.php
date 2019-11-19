<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{

    public function getClientePorId($id)
    { 
        $clientes = Clientes::where('id', $id)->first();

        if (!$clientes) {
            return response()->json('No se encontraron clientes', 404);
        }

        return response()->json($clientes, 200);
    }

    public function getClientes()
    { 
        $clientes = Clientes::get();

        if ($clientes->isEmpty()) {
            return response('No se encontro al cliente', 404);
        }

        return response($clientes, 200);
    }

    public function postLogin(Request $request)
    { 
        $this->validate($request, [
            'clientes' => 'required',
        ]);

        $clientes = new Clientes();
        $clientes->fill($request->all());

        $guardado = $clientes->save();

        if ($guardado) {
            return response()->json('El cliente se ha logueado correctamente', 200);
        } else {
            return response()->json('El cliente no se ha logueado correctamente', 500);
        } 
    }

    public function postRegistro(Request $request)
    { 
        $this->validate($request, [
            'clientes' => 'required',
        ]);

        $clientes = new Clientes();
        $clientes->fill($request->all());

        $guardado = $clientes->save();

        if ($guardado) {
            return response()->json('El cliente se ha registrado correctamente', 200);
        } else {
            return response()->json('El cliente no se ha registrado correctamente', 500);
        }
    }

    public function putCliente(Request $request)
    { 
        $this->validate($request, [
            'id' => 'required',
            'clientes' => 'required',
        ]);

        $clientes = Clientes::where('id', $request->id)->first();
        $clientes->fill($request->all());

        $resultado = $clientes - save();

        if ($resultado) {
            return response()->json('La información del cliente se ha actualizado', 200);
        }

        return response()->json('La información del cliente no se actualizó', 500);
    }

    public function deleteCliente($id)
    { 
        $eliminados = Clientes::where('id', $id)->delete();

        if (count($eliminados) > 0) {
            return response()->json('El cliente se eliminó', 200);
        }

        return response()->json('El cliente no se eliminó', 500);
    }
    
}
