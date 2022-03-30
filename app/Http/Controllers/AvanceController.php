<?php

namespace App\Http\Controllers;

use App\Models\Avance;
use Illuminate\Http\Request;

class AvanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $avances = Avance::all();
        return $avances;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $avance=new Avance();
        $avance->fecha_inicio=$request->fecha_inicio;
        $avance->descripcion=$request->descripcion;
        $avance->fecha_finalizacion=$request->fecha_finalizacion;
        $avance->precio=$request->precio;
        $avance->recurso_id=$request->recurso_id;
        $avance->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Avance  $avance
     * @return \Illuminate\Http\Response
     */
    public function show(Avance $avance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avance  $avance
     * @return \Illuminate\Http\Response
     */
    public function edit(Avance $avance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Avance  $avance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avance $avance, $id)
    {
        //
        $avance = Avance::findOrFail($request->id);
        $avance->fecha_inicio=$request->fecha_inicio;
        $avance->descripcion=$request->descripcion;
        $avance->fecha_finalizacion=$request->fecha_finalizacion;
        $avance->precio=$request->precio;
        $avance->recurso_id=$request->recurso_id;

        $avance->save();
        return $avance;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avance  $avance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avance $avance, Request $request)
    {
        //
        $avance = avance::destroy($request->id);
        return $avance;
    }
}
