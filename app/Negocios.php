<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Negocios extends Model {
    protected $primaryKey = 'id';
    protected $table = 'negocios';
    public $timestamps = false;

    protected $fillable = [
        'nombre', 'abierto', 'cerrado'
    ];

    protected $hidden = [
        
    ];
}
