<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\AnalisisMuestras;

class AnalisisMuestrasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $analisisMuestras = AnalisisMuestras::all();
        return response()->json($analisisMuestras,200);
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
        $analisisMuestras= new AnalisisMuestras();
        
        //$analisisMuestras->idAnalisisMuestras= $request->post("fechaRecepcion ");
        $analisisMuestras->temperaturaMuestra= $request->post("temperaturaMuestra");
        $analisisMuestras->cantidadMuestra= $request->post("cantidadMuestra");
        $analisisMuestras->rutEmpleadoRecibe= $request->post("rutEmpleadoRecibe");
        $analisisMuestras->fechaRecepcion = $request->post("fechaRecepcion");
        
        $analisisMuestras->save();
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
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
