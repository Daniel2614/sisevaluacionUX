<?php

use Illuminate\Database\Seeder;

class CatCarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('catcarrera')->insert([
        	['nombreCarrera'=>'ADMINISTRACION Y NEGOCIOS', 'clave'=>'NA'],
        	['nombreCarrera'=>'ADMINISTRACION Y NEGOCIOS', 'clave'=>'NN'],
        	['nombreCarrera'=>'ADMINISTRACION Y NEGOCIOS', 'clave'=>'NC'],
        	['nombreCarrera'=>'ADMINISTRACION Y NEGOCIOS', 'clave'=>'NF'],
        	['nombreCarrera'=>'ADMINISTRACION Y NEGOCIOS', 'clave'=>'NZ'],
        	['nombreCarrera'=>'ADMINISTRACION Y NEGOCIOS', 'clave'=>'NH'],
        	['nombreCarrera'=>'COMUNICACION', 'clave'=>'NM'],
        	['nombreCarrera'=>'DERECHO', 'clave'=>'ND'],
        	['nombreCarrera'=>'INGENIERIA EN SISTEMAS', 'clave'=>'NS'],
        	['nombreCarrera'=>'EDUACION', 'clave'=>'NE'],
        	['nombreCarrera'=>'CELEUX', 'clave'=>'CX'],

        	
        ]);
    }
}
