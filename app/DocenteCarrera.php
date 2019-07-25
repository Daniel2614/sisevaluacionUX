<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocenteCarrera extends Model
{
     protected $table = 'docentecarrera';

    protected $fillable = [
    	'id'
    	'idDocente'
    	'idCarrera'
    		];
}
