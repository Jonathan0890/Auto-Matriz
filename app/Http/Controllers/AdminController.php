<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function report()
    {
        return view('admin.reports.report');
    }

    public function mensaje()
    {
        return view('admin.messenge.mensaje');
    }

    public function factura()
    {
        return view('admin.facturacion.factura');
    }

    public function dashboard()
    {
        return view('admin.dashboard-admin');
    }
    
    public function credito()
    {
        return view('admin.credito.tabla-cred');
    }

    public function inventario()
    {
        return view('admin.inventario.tabla-inv');
    }

    public function presupuerto()
    {
        return view('admin.presupuesto.tab-pres');
    }

    public function ordenServicio()
    {
        return view('admin.orden-servicio.tabla-orden-ser');
    }

    public function paquete()
    {
        return view('admin.paquete.tabla-paq');
    }



    public function index()
    {
        //
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
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
