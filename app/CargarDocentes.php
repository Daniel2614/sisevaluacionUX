<?php

namespace App;

use App\Docentes;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;

class CargarDocentes implements ToModel
{
	public function model(array $row)
    {
        return new Docentes([
        	'carrera'     => $row[0],
           'nombre'     => $row[1]
           
        ]);
    }
}
