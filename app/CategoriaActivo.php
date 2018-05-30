<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaActivo extends Model
{
    protected $fillable = [
        'nombre'
    ];
    public function tipo_activos(){
    	return $this->hasMany(TipoActivo::class);
    	
    }
}
