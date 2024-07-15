<?php

namespace App\Http\Controllers;

use App\Models\superAdmin;
use App\Http\Requests\StoresuperAdminRequest;
use App\Http\Requests\UpdatesuperAdminRequest;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

/*   public function report()
    {
        return view('superadmin.reports.report');
    }

    public function mensaje()
    {
        return view('superadmin.messenge.mensaje');
    }   
    
    public function ordenServicio()
    {
        return view('superadmin.orden-servicio.tabla-orden-ser');
    }

    public function paquete()
    {
        return view('superadmin.paquete.tabla-paq');
    }
*/
    public function factura()
    {
        return view('superadmin.facturacion.factura');
    }

    public function dashboard()
    {
        return view('superadmin.dashboard-superAdmin');
    }

    public function credito()
    {
        return view('superadmin.credito.tabla-cred');
    }

    public function inventario()
    {
        return view('superadmin.inventario.tabla-inv');
    }

    public function presupuerto()
    {
        return view('superadmin.presupuesto.tab-pres');
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
    public function store(StoresuperAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(superAdmin $superAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(superAdmin $superAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatesuperAdminRequest $request, superAdmin $superAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(superAdmin $superAdmin)
    {
        //
    }
}
