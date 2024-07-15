<?php

namespace App\Http\Controllers;

use App\Models\Credito;
use App\Http\Requests\StoreCreditoRequest;
use App\Http\Requests\UpdateCreditoRequest;

class CreditoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $creditos = Credito::all();
        return view('admin.credito.tabla-cred', compact('creditos'));
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
    public function store(StoreCreditoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Credito $credito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Credito $credito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCreditoRequest $request, Credito $credito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Credito $credito)
    {
        //
    }
}
