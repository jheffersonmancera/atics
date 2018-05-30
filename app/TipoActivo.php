<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoActivo extends Model
{	
	

    protected $fillable = [
        'nombre', 'id_categoria'
    ];
    public function activos(){
    	return $this->hasMany(Activo::class);//*1Category.php
    	
    }
   /* public function categoria_activo(){
    	return $this->belongsTo(CategoriaActivo::class);//Un Tipo de activo pertenece a una Categoria de Activo y determina a su vez a que categoria pertenece el activo
    	
    }*/
    
}
