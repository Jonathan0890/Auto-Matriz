<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use App\Http\Requests\StorePaqueteRequest;
use App\Http\Requests\UpdatePaqueteRequest;

class PaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paquetes = Paquete::all();
        return view('admin.paquete.tabla-paq', compact('paquetes'));
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
    public function store(StorePaqueteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Paquete $paquete)
    {
        $paquete = Paquete::find($paquete->id);
        return view('admin.paquete.partials.show_paq', compact('paquete'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paquete $paquete)
    {
        $paquete = Paquete::find($paquete->id);
        return view('admin.paquete.partials.edit_paq', compact('paquete'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaqueteRequest $request, Paquete $paquete)
    {
        $paquete->update($request->all());
        return redirect()->route('paquetes.show', $paquete->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paquete $paquete)
    {
        $paquete->delete();
        return redirect()->route('paquetes.index');
    }
}
