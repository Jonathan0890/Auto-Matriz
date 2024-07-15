<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('user.contacto');
    }

    public function send(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mensaje' => 'required|string',
        ]);

        Mensaje::create([
            'nombre' => $request->name,
            'email' => $request->email,
            'mensaje' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Mensaje enviado correctamente.');
    }
}
