<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatCarrera;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $carrera = CatCarrera::all();
        return view('carrera.index',['carreras'=>$carrera]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cc.create');
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
        $this->validate($request,
            [ 'nombreCarrera'=>'required',
              'clave'=>'required']);
        CatCarrera::create($request->all());
        return redirect()->route('carrerascc')->with('success','Registro creado satisfactoriamente');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //  $carreras=Docentes::find($id);
        // return  view('Docentes.show',compact('carreras'));
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
        $carreras=CatCarrera::find($id);
        return view('carrera.edit',compact('carrera'));
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
        $id=$request->id;
        $this->validate($request,
            [ 'nombreCarrera'=>'required',
              'clave'=>'required']);
 
        CatCarrera::find($id)->update($request->all());
        return redirect()->route('carrerascc')->with('success','Registro actualizado satisfactoriamente');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         CatCarrera::find($id)->delete();
        return redirect()->route('carrerascc')->with('success','Registro eliminado satisfactoriamente');
   
    }
}
