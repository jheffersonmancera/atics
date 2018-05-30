<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    protected $fillable = [
        'nombre','id_tipo','imagen'
    ];

    public function tipo_activo(){
    	return $this->belongsTo(TipoActivo::class);//Un Activo pertenece a un solo tipo de activo
    	
    }


}
