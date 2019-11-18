<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model {
    protected $primaryKey = 'id';
    protected $table = 'categorias';
    public $timestamps = false;

    protected $fillable = [
        'categoria'
    ];

    protected $hidden = [
        
    ];
}