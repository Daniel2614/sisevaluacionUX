<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Docentes;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $docente = Docentes::all();
        return view('docentes.index',['docentes'=>$docente]);
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
        $this->validate($request,
            [ 'nombre'=>'required',
              'apPaterno'=>'required', 
              'apMaterno'=>'required']);
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
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,
            [ 'nombre'=>'required',
              'apPaterno'=>'required', 
              'apMaterno'=>'required']);
 
        Docentes::find($id)->update($request->all());
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
}
