<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model {
    protected $primaryKey = 'id';
    protected $table = 'menus';
    public $timestamps = false;

    protected $fillable = [
        'id_negocio'
    ];

    protected $hidden = [
        
    ];
}