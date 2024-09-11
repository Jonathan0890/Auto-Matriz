@extends('test.layout')

@section('content')
    <div class="flex justify-center items-center min-h-screen ">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-4xl p-8">
            <h2 class="text-3xl font-semibold mb-8 text-center">Editar Mensaje</h2>
            <form action="{{ route('mensaje.update', $mensaje->id) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                    <input value="{{ $mensaje->nombre }}" type="text" nombre="nombre" id="nombre"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input value="{{ $mensaje->email }}" type="email" nombre="email" id="email"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>

                <div class="mb-4">
                    <label for="mensaje" class="block text-gray-700 text-sm font-bold mb-2">Mensaje</label>
                    <textarea nombre="mensaje" id="mensaje" 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $mensaje->mensaje }}</textarea>
                </div>

                <div class="flex justify-center">
                    <button type="submit"
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Guardar</button>
                </div>

            </form>
        </div>
    </div>
@endsection
