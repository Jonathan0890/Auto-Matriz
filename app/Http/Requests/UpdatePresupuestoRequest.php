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
            'fecha' => 'required',
            'raszon_social' => 'required',
            'estado' => 'required',
            'no_orden' => 'required',
            'vehiculo' => 'required',
            'modelo' => 'required',
            'anio' => 'required',
            'placa' => 'required',
            'reporte_cliente' => 'required',
            'kilometraje' => 'required',
            'no_economico' => 'required',
            'sub_total' => 'required',
            'impuestos' => 'required',    
            'total' => 'required',
        ];
    }
}
