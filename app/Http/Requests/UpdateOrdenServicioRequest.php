<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrdenServicioRequest extends FormRequest
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
            'no_orden' => 'required|string|max:50',
            'vehiculo' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'anio' => 'required|integer|min:1900|max:' . date('Y'),
            'placa' => 'required|string|max:50',
            'reporte_cliente' => 'required|string|max:255',
            'kilometraje' => 'required|numeric|min:0',
            'no_economico' => 'required|string|max:50',
            'sub_total' => 'required|numeric|min:0',
            'impuestos' => 'required|numeric|min:0',
            'total' => 'required|numeric|min:0',
        ];
    }
}
