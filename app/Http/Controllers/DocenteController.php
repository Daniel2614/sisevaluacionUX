<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Docentes;
use App\CargarDocentes;
use App\CatCarrera;
use Maatwebsite\Excel\Facades\Excel;
class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function listamaestros()
    {
         $docentes = Docentes::all();

        return $docentes;
    }

    public function index()
    {
         $docentes = Docentes::all();
         $carreras = CatCarrera::all();

        return view('docentes.index',['docentes'=>$docentes, 'carreras'=>$carreras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('hola');

        $carreras=$request->carrera;

        $this->validate($request,
            [ 'nombre'=>'required',
              'apPaterno'=>'required', 
              'apMaterno'=>'required']);
        $docentes=Docentes::find($request->id);
        foreach ($carreras as $carrera) {

           $docentes->carrera()->attach($carrera);
        }
        Docentes::create($request->all());
        return redirect()->route('docentesdc')->with('success','Registro creado satisfactoriamente');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $docentes=Docentes::find($id);
        return  view('Docentes.show',compact('docentes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $docentes=Docentes::find($id);
        return view('docente.edit',compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

        $carreras=$request->carrera;
        
        $this->validate($request,
            [ 'nombre'=>'required',
              'apPaterno'=>'required', 
              'apMaterno'=>'required']);
        $docentes=Docentes::find($request->id);
        foreach ($carreras as $carrera) {

           $docentes->carrera()->attach($carrera);
        }
        $docentes->update($request->all());

        return redirect()->route('docentesdc')->with('success','Registro actualizado satisfactoriamente');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Docentes::find($id)->delete();
        return redirect()->route('Docentes.index')->with('success','Registro eliminado satisfactoriamente');
   
    }
    public function import(Request $request) 
    {
       
        Excel::import(new CargarDocentes, $request->excel);
        
      



        
        return redirect('/')->with('success', 'All good!');
    }
}
