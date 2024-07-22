<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFacturacionRequest extends FormRequest
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
            'number_factura' => 'required',
            'cliente_id' => 'required',
            'fecha_emision' => 'required',
            'fecha_vencimiento' => 'required',
            'total' => 'required',
            'estado' => 'required',
            'observacion' => 'required',
        ];
    }
}
