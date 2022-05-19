<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;
use App\Municipio;
Use App\Colonia;

class WebServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        /*
        *********************************************************************************************************
        NOTA:
        Siqueremos retornar error para validar el dato podemos quitar el comentario y condicionar cada parámetro
        *********************************************************************************************************
        if (isset($request->estado) == false || empty($request->estado))
        {
            return response()->json([
                'status' => 200,
                'message' => 'Variable no definida o vacia.',
            ], 200);
        }

        select `estados`.`estado` as `Estado`, `municipios`.`municipio` as `Municipio`, `colonias`.`d_asenta` as `Colonia`, `colonias`.`d_codigo` as `codigo_postal` from `estados` inner join `municipios` on `estados`.`id` = `municipios`.`estado_id` inner join `colonias` on `municipios`.`id` = `colonias`.`municipio_id` 
        where (`estados`.`estado` = 'Aguascalientes' and `municipios`.`municipio` = '' and `colonias`.`d_codigo` ='')
        */
        //Estado
        $estados = Estado::select('estados.estado as Estado')
        ->where('estados.estado','=',"$request->estado")
        ->get();
        $municipios = Municipio::select('municipios.municipio as Municipio')
        ->where('municipios.municipio','=',"$request->municipio")
        ->get();
        $cp = Colonia::select('colonias.d_asenta as Colonia','colonias.d_codigo as codigo_postal')
        ->where('colonias.d_codigo','=',$request->codigo_postal)
        ->get();

        return response()->json([
            'status' => 200,
            'estados' => $estados,
            'municipios' => $municipios,
            'colonias' => $cp,
        ], 200);
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
