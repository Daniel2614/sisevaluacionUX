<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatCarrera extends Model
{
    protected $table = 'catcarrera';

    protected $fillable = [
    	'id',
    	'nombreCarrera',
    	'clave'
    	
    		];



  public function docentes()
  {
      return $this->belongsToMany('App\Docentes', 'docentecarrera', 'idCarrera', 'idDocente');
  }
}
