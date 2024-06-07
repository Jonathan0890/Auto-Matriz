<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="">
        <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
            <div>
                <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg"
                    alt="">
            </div>
            <nav class="bg-gray-800 p-5">
                <ul class="flex space-x-8 text-white flex-end sm:flex-row">
                    <li>
                        <a class="hover:text-gray-300 active:text-yellow-500" href="#">Home</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-300" href="#">About</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-300" href="#">Services</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-300" href="#">Contact</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-300" href="#">Blog</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-300" href="#">Portfolio</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-300" href="#">FAQ</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="mt-6">
            <div class="text-center">
                <h1 class="text-4xl font-bold">Auto-Matriz</h1>
            </div>
<div>
    <p>Auto-Matriz</p>

    <p class="mt-4">Auto-Matriz</p>

    <p class="mt-4">Auto-Matriz</p>

    <p class="mt-4">Auto-Matriz</p>
</div>
        </main>
        <footer class="py-16 text-center text-sm text-black dark:text-white/70">
            <p>&copy; 2022 Auto-Matriz. All rights reserved.</p>
        </footer>
    </div>
</body>

</html>
