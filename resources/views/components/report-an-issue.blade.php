<div class="rounded-lg border bg-white text-black shadow-lg w-full max-w-md mx-auto" data-v0-t="card">
    <div class="flex flex-col space-y-3 p-6">
        <h3 class="text-2xl font-semibold leading-none tracking-tight text-center">Reportar un problema</h3>
        <p class="text-sm text-gray-600">
            Cuéntanos sobre cualquier problema, sugerencia o comentario que tengas.
        </p>
    </div>
    <div class="p-6">
        <form class="grid gap-6" method="POST" action="{{ route('report.issue') }}">
            @csrf
            <div class="grid gap-1">
                <label class="text-sm font-medium" for="name">
                    Nombre
                </label>
                <input class="h-10 w-full rounded-md border border-gray-300 bg-gray-100 px-3 py-2 text-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="name" name="name" placeholder="Ingresa tu nombre" required />
            </div>
            <div class="grid gap-1">
                <label class="text-sm font-medium" for="email">
                    Correo electrónico
                </label>
                <input class="h-10 w-full rounded-md border border-gray-300 bg-gray-100 px-3 py-2 text-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="email" name="email" type="email" placeholder="Ingresa tu correo" required />
            </div>
            <div class="grid gap-1">
                <label class="text-sm font-medium" for="type">
                    Tipo de reporte
                </label>
                <select class="h-10 w-full rounded-md border border-gray-300 bg-gray-100 px-3 py-2 text-sm text-black focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="type" name="type" required>
                    <option value="">Selecciona un tipo</option>
                    <option value="problem">Problema</option>
                    <option value="suggestion">Sugerencia</option>
                    <option value="comment">Comentario</option>
                </select>
            </div>
            <div class="grid gap-1">
                <label class="text-sm font-medium" for="description">
                    Descripción
                </label>
                <textarea class="w-full rounded-md border border-gray-300 bg-gray-100 px-3 py-2 text-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent min-h-[150px]" id="description" name="description" placeholder="Cuéntanos más sobre tu reporte" required></textarea>
            </div>
            <button class="h-10 w-full rounded-md bg-blue-600 text-white font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors" type="submit">
                Enviar reporte
            </button>
        </form>
    </div>
</div>
