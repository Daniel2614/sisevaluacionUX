<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluaciones extends Model
{
    
    protected $table = 'evaluaciones';

    protected $fillable = [
    	'id'
    	'puntaje'
    	'idDocente'
    	'idCriterio'
    	'idFrecuencia'
    	'puntaje'
    	
    		];
}
