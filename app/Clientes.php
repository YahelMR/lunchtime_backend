<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model {
    protected $primaryKey = 'id';
    protected $table = 'clientes';
    public $timestamps = false;

    protected $fillable = [
        'nombre', 'telefono', 'saldo'
    ];

    protected $hidden = [
        'password'
    ];
}