<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Frecuencias;

class FrecuenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $frecuencia = Frecuencias::all();
        return view('frecuencia.index',['frecuencias'=>$frecuencia]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('f.create');
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
            [ 'frecuencia'=>'required',
              'puntaje'=>'required']);
        Frecuencias::create($request->all());
        return redirect()->route('frecuenciasf')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $frecuencias=Frecuencias::find($id);
        return view('frecuencia.edit',compact('frecuencia'));
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
         $id=$request->id;
        $this->validate($request,
            [ 'frecuencia'=>'required',
              'puntaje'=>'required']);
 
        Frecuencias::find($id)->update($request->all());
        return redirect()->route('frecuenciasf')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          Frecuencias::find($id)->delete();
        return redirect()->route('frecuenciasf')->with('success','Registro eliminado satisfactoriamente');
    }
}
