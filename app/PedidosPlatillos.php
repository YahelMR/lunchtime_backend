<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidosPlatillos extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'pedidos_platillos';
    public $timestamps = false;

    protected $fillable = [
        'id_pedido', 'id_platillo', 'cantidad', 'total'
    ];

    protected $hidden = [];
}
