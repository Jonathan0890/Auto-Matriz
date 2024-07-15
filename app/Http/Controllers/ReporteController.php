<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use App\Http\Requests\StoreReporteRequest;
use App\Http\Requests\UpdateReporteRequest;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reportes = Reporte::all();
        return view('admin.reports.report', compact('reportes'));
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
    public function store(StoreReporteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reporte $reporte)
    {
        $reporte = Reporte::find($reporte->id);
        return view('admin.reports.partials.show_rep', compact('reporte'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reporte $reporte)
    {
        $reporte = Reporte::find($reporte->id);
        return view('admin.reports.partials.edit_rep', compact('reporte'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReporteRequest $request, Reporte $reporte)
    {
        $reporte->update($request->all());
        return redirect()->route('reporte.show', $reporte->id);    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reporte $reporte)
    {
        $reporte->delete();
        return redirect()->route('reporte.index');
    }
}
