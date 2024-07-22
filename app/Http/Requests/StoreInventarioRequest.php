<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInventarioRequest extends FormRequest
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
            'folio_inventario' => 'required',
            'clave_unica_producto' => 'required',
            'numero_producto' => 'required',
            'descripcion_producto' => 'required',
            'cantidad' => 'required',
            'precio_producto' => 'required',
            'monto' => 'required',
        ];
    }
}
