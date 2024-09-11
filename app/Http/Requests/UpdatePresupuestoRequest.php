<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePresupuestoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fecha' => 'required|date',
            'razon_social' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
            'no_orden' => 'required|string|max:255',
            'vehiculo' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'year' => 'required|integer',
            'placa' => 'required|string|max:255',
            'reporte_cliente' => 'required|string',
            'kilometraje' => 'required|integer',
            'no_economico' => 'required|string|max:255',
            'sub_total' => 'required|numeric',
            'impuestos' => 'required|numeric',
            'total' => 'required|numeric',
        ];
    }
}
