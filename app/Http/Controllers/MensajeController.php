<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use App\Http\Requests\StoreMensajeRequest;
use App\Http\Requests\UpdateMensajeRequest;

class MensajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mensajes = Mensaje::all();
        return view('admin.messenge.mensaje', compact('mensajes'));
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
    public function store(StoreMensajeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mensaje $mensaje)
    {
        $mensaje = Mensaje::find($mensaje->id);
        return view('admin.messenge.partials.show_men', compact('mensaje'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mensaje $mensaje)
    {
        $mensaje = Mensaje::find($mensaje->id);
        return view('admin.messenge.partials.edit_men', compact('mensaje'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMensajeRequest $request, Mensaje $mensaje)
    {
        $mensaje->update($request->all());
        return redirect()->route('mensaje.show', $mensaje->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mensaje $mensaje)
    {
        $mensaje->delete();
        return redirect()->route('mensaje.index');
    }
}
