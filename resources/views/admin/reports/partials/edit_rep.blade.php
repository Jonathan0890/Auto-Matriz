<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Editar Reporte</title>
</head>

<body class="bg-gray-100">
    <div class="flex justify-center items-center min-h-screen px-4">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 w-full max-w-4xl">
            <h2 class="text-3xl font-bold mb-4 text-center">Editar Reporte</h2>
            <form action="{{ route('reporte.update', $reporte->id) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <!-- Nombre -->
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                    <input value="{{ $reporte->nombre }}" type="text" name="nombre" id="nombre"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input value="{{ $reporte->email }}" type="email" name="email" id="email"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <!-- Tipo -->
                <div class="mb-4">
                    <label for="tipo" class="block text-gray-700 text-sm font-bold mb-2">Tipo:</label>
                    <input value="{{ $reporte->tipo }}" type="text" name="tipo" id="tipo"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>

                <!-- Descripción -->
                <div class="mb-4">
                    <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
                    <textarea name="descripcion" id="descripcion"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $reporte->descripcion }}</textarea>
                </div>

                <!-- Botón Guardar -->
                <div class="flex justify-center">
                    <button type="submit"
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
