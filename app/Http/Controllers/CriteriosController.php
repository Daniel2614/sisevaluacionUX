<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Criterios;

class CriteriosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $criterio = Criterios::all();
        return view('criterios.index',['criterios'=>$criterio]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('c.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [ 'categoria'=>'required',
              'aspectoEvaluar'=>'required']);
        Criterios::create($request->all());
        return redirect()->route('criteriosc')->with('success','Registro creado satisfactoriamente');
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
        $criterio=Criterios::find($id);
        return view('criterio.edit',compact('criterio'));
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
            [ 'categoria'=>'required',
              'aspectoEvaluar'=>'required']);
 
        Criterios::find($id)->update($request->all());
        return redirect()->route('criteriosc')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Criterios::find($id)->delete();
        return redirect()->route('criteriosc')->with('success','Registro eliminado satisfactoriamente');
    }
}
