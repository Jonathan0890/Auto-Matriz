<?php

namespace App\Http\Controllers;

use App\Models\Facturacion;
use App\Http\Requests\StoreFacturacionRequest;
use App\Http\Requests\UpdateFacturacionRequest;

class FacturacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facturacions = Facturacion::all(); 
        return view('admin.facturacion.factura', compact('facturacions'));
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
    public function store(StoreFacturacionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Facturacion $facturacion)
    {
        $facturacion = Facturacion::find( $facturacion->id );
        return view('admin.facturacion.partials.show_fact', compact('facturacion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Facturacion $facturacion)
    {
        $facturacion = Facturacion::find( $facturacion->id );
        return view('admin.facturacion.partials.edit_fact', compact('facturacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFacturacionRequest $request, Facturacion $facturacion)
    {
        $facturacion->update($request->all());
        return redirect()->route('facturacion.show', $facturacion->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Facturacion $facturacion)
    {
        $facturacion->delete();
        return redirect()->route('facturacion.index');
    }
}
