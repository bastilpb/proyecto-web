<?php

namespace App\Http\Controllers;

use App\Models\Arriendo;
use Illuminate\Http\Request;

class ArriendosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return(view('arriendos.index'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $arriendo = new Arriendo();
        $arriendo->patente = $request->patente;
        $arriendo->rut = $request->rut;
        $arriendo->dia_arriendo = $request->dia_arriendo;
        $arriendo->dia_entrega = $request->dia_entrega;
        $arriendo->total_pago = $request->total_pago;
        $arriendo->save();
        return redirect()->route('arriendos.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Arriendo $arriendo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Arriendo $arriendo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Arriendo $arriendo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Arriendo $arriendo)
    {
        //
    }
}