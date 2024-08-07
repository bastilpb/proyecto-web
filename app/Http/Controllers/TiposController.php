<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo;

class TiposController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // genero una lista de todos los tipos
        $tipos = Tipo::all();

        return view('tipos.index',compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipos = Tipo::all();

        return view('tipos.create',compact('tipos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tipo = new Tipo();
        $tipo->nombre = $request->nombre;
        $tipo->costo = $request->costo;

        $tipo->save();

        return redirect()->route('tipos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Tipo $tipo)
    {   
        
        return view('tipos.edit',compact('tipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Tipo $tipo)
    {
        
        $tipo->nombre = $request->nombre;

        $tipo->costo = $request->costo;

        $tipo->save();

        return redirect()->route('tipos.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tipo $tipo)
    {
        $tipo->delete();

        return redirect()->route('tipos.index')->with('success','Tipo eliminado correctamente!');
    }
}
