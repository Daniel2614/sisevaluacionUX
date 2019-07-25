<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docentes extends Model
{
    protected $table = 'docentes';

    protected $fillable = [
    	'id',
    	'nombre',
    	'apPaterno',
    	'apMaterno'
    	
    		];


	// public function orden()
	// {
	// 	return $this->belongsTo('App\OrdenPago','idOrden');
	// }
	// public function usuario()
	// {
	// 	return $this->hasOne('App\User','id','idUsuario');
	// }

}
