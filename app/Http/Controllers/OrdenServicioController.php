<?php

namespace App\Http\Controllers;

use App\Models\OrdenServicio;
use App\Http\Requests\StoreOrdenServicioRequest;
use App\Http\Requests\UpdateOrdenServicioRequest;

class OrdenServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ordeneservs = OrdenServicio::all();
        return view('admin.orden-servicio.tabla-orden-ser', compact('ordeneservs'));
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
    public function store(StoreOrdenServicioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OrdenServicio $ordenServicio)
    {
        $ordenServicio = OrdenServicio::find($ordenServicio->id);
        return view('admin.orden-servicio.partials.show_ord', compact('ordenServicio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrdenServicio $ordenServicio)
    {
        $ordenServicio = OrdenServicio::find($ordenServicio->id);
        return view('admin.orden-servicio.partials.edit_ord', compact('ordenServicio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrdenServicioRequest $request, OrdenServicio $ordenServicio)
    {
        $ordenServicio->update($request->all());
        return redirect()->route('ordenservicio.show', $ordenServicio->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrdenServicio $ordenServicio)
    {
        $ordenServicio->delete();
        return redirect()->route('ordenservicio.index');
    }
}
