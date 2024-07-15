<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportIssueController extends Controller
{
    //

    public function store(Request $request)
    {
        $request->validate([            
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'tipo' => 'required|string',
            'descripcion' => 'required|string|max:255',
        ]);
    
        Report::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'tipo' => $request->tipo,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->back()->with('success', 'Reporte enviado exitosamente');
    }


}
