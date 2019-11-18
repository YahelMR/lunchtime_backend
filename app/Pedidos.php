<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model {
    protected $primaryKey = 'id';
    protected $table = 'pedidos';
    public $timestamps = false;

    protected $fillable = [
        'fecha_hora', 'total', 'id_cliente'
    ];

    protected $hidden = [
        
    ];
}