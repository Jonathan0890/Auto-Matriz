<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCreditoRequest extends FormRequest
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
            'RFC' => 'required|string|max:20',
            'no_orden' => 'required|string|max:50',
            'dias_restantes' => 'required|integer|min:0',
            'vehiculo' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'anio' => 'required|integer|min:1900|max:' . date('Y'),
            'placa' => 'required|string|max:20',
            'anticipo' => 'required|numeric|min:0',
            'por_pagar' => 'required|numeric|min:0',
            'total' => 'required|numeric|min:0',
        ];
    }
}
