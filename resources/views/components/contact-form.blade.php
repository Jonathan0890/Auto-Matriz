<div class="rounded-lg border bg-white text-black shadow-lg w-full max-w-md mx-auto" data-v0-t="card">
    <div class="flex flex-col space-y-3 p-6">
        <h3 class="text-2xl font-semibold leading-none tracking-tight text-center">Contáctanos</h3>
        <p class="text-sm text-gray-600">Déjanos tu mensaje y nos pondremos en contacto contigo</p>
    </div>
    <div class="p-6">
        <form class="grid gap-6" method="POST" action="{{ route('contact.send') }}">
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
                <label class="text-sm font-medium" for="message">
                    Mensaje
                </label>
                <textarea class="w-full rounded-md border border-gray-300 bg-gray-100 px-3 py-2 text-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent min-h-[150px]" id="message" name="message" placeholder="Escribe tu mensaje aquí" required></textarea>
            </div>
            <button class="h-10 w-full rounded-md bg-blue-600 text-white font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors" type="submit">
                Enviar
            </button>
        </form>
    </div>
</div>
