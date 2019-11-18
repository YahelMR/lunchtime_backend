<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Platillos extends Model {
    protected $primaryKey = 'id';
    protected $table = 'platillos';
    public $timestamps = false;

    protected $fillable = [
        'nombre', 'precio', 'disponible', 'id_categoria', 'id_menu'
    ];

    protected $hidden = [
        
    ];
}