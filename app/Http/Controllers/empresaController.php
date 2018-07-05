<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use Illuminate\Support\Facades\Input;

class empresaController extends Controller


{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresa= Empresa::all();
        return response()->json($empresa,200);
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
        $empresa = new Empresa();
        
        $empresa->rutEmpresa=$request->post("rutEmpresa");
        $empresa->nombreEmpresa=$request->post("nombreEmpresa");
        $empresa->passwordEmpresa=$request->post("passwordEmpresa");
        $empresa->direccionEmpresa=$request->post("direccionEmpresa");
        
        $empresa->save();
        
        return response()->json($empresa,200);
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
    public function update(Request $request, Empresa $empresa)
    {
        $empresa->rutEmpresa=$request->post('rutEmpresa');
        $empresa->rutEmpresa=$request->post('nombreEmpresa');
        $empresa->rutEmpresa=$request->post('passwordEmpresa');
        $empresa->rutEmpresa=$request->post('direccionEmpresa');
        
        $empresa->save();
        return response()->json($empresa, 200);
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
