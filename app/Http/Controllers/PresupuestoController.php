<?php

namespace App\Http\Controllers;

use App\Models\Presupuesto;
use App\Http\Requests\StorePresupuestoRequest;
use App\Http\Requests\UpdatePresupuestoRequest;

class PresupuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $presupuestos = Presupuesto::all();
        return view('admin.presupuesto.tab-pres', compact('presupuestos'));
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
    public function store(StorePresupuestoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Presupuesto $presupuesto)
    {
        $presupuesto = Presupuesto::find($presupuesto->id);
        return view('admin.presupuesto.partials.show_pres', compact('presupuesto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Presupuesto $presupuesto)
    {
        $presupuesto = Presupuesto::find($presupuesto->id);
        return view('admin.presupuesto.partials.edit_pres', compact('presupuesto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePresupuestoRequest $request, Presupuesto $presupuesto)
    {
        $presupuesto->update($request->all());
        return redirect()->route('presupuesto.show', $presupuesto->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Presupuesto $presupuesto)
    {
        $presupuesto->delete();
        return redirect()->route('presupuesto.index');
    }
}
