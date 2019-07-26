<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frecuencias extends Model
{
     protected $table = 'frecuencias';

    protected $fillable = [
    	'id',
    	'frecuencia',
    	'puntaje'    	
    		];
}
