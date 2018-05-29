<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    protected $fillable = [
        'nombre','id_tipo','id_','marca','foto'
    ];
}
