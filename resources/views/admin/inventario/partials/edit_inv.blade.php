@extends('test.layout')

@section('content')
    <div class="flex justify-center items-center min-h-screen px-4">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-4xl p-8">
            <h2 class="text-3xl font-semibold mb-8 text-center">EDITAR inventario</h2>
            <form action="{{ route('inventario.update', $inventario->id) }}" method="POST" class="w-full max-w-lg">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="nombre" class="nombre text-gray-700 text-sm font-bold mb-2">Folio de inventario</label>
                    <input type="text" name="nombre" id="nombre" value="{{ $inventario->nombre }}"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>

                <div class="mb-6">
                    <label for="total" class="total text-gray-700 text-sm font-bold mb-2">Total</label>
                    <input type="text" name="total" id="total" value="{{ $inventario->total }}"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
            </form>
        </div>
    </div>
@endsection
