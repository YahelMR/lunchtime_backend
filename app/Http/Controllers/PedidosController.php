<?php

namespace App\Http\Controllers;

use App\Pedidos;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function getPedidos()
    { 
        $pedidos = Pedidos::get();

        if ($pedidos->isEmpty()) {
            return response('No se encontraron pedidos', 404);
        }

        return response($pedidos, 200);
    }

    public function getPedidoPorId($id)
    { 
        $pedidos = Pedidos::where('id', $id)->first();

        if (!$pedidos) {
            return response()->json('No se encontró el pedido', 404);
        }

        return response()->json($pedidos, 200);    
    }

    public function postPedido(Request $request)
    { 
        $this->validate($request, [
            'pedidos' => 'required',
        ]);

        $pedidos = new Pedidos();
        $pedidos->fill($request->all());

        $guardado = $pedidos->save();

        if ($guardado) {
            return response()->json('El pedido se ha guardado correctamente', 200);
        } else {
            return response()->json('El pedido no se ha guardado correctamente', 500);
        } 
    }

    public function putPedido(Request $request)
    { 
        $this->validate($request, [
            'id' => 'required',
            'pedidos' => 'required',
        ]);

        $pedidos = Pedidos::where('id', $request->id)->first();
        $pedidos->fill($request->all());

        $resultado = $pedidos - save();

        if ($resultado) {
            return response()->json('El pedido se ha actualizado', 200);
        }

        return response()->json('El pedido no se actualizó', 500); 
    }

    public function deletePedido($id)
    { 
        $eliminados = Pedidos::where('id', $id)->delete();

        if (count($eliminados) > 0) {
            return response()->json('El pedido se eliminó', 200);
        }

        return response()->json('El pedido no se eliminó', 500);
    }
}
