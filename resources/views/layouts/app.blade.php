<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
    {{-- @livewireStyles --}}
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <!-- Header público -->
            <header class="bg-white shadow-sm">
                <div class="max-w-7xl mx-auto flex items-center justify-between py-4 px-4 sm:px-6 lg:px-8">
                    <a href="/" class="flex items-center gap-3">
                        <img src="/logo.png" alt="Logo" class="w-10 h-10 rounded-full object-cover bg-blue-100" onerror="this.style.display='none'">
                        <span class="text-xl font-bold text-blue-700">WebDev Salud</span>
                    </a>
                    <nav class="hidden md:flex gap-6 text-sm font-medium">
                        <a href="/" class="hover:text-blue-700">Inicio</a>
                        <a href="#cursos" class="hover:text-blue-700">Cursos</a>
                        <a href="#como-funciona" class="hover:text-blue-700">Cómo funciona</a>
                        <a href="#contacto" class="hover:text-blue-700">Contacto</a>
                    </nav>
                    <div class="flex items-center gap-2">
                        @auth
                            <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 rounded border border-blue-700 text-blue-700 font-semibold hover:bg-blue-50">Panel</a>
                        @else
                            <a href="{{ route('login') }}" class="px-4 py-2 rounded bg-blue-700 text-white font-semibold hover:bg-blue-800">Iniciar sesión</a>
                            <a href="{{ route('register') }}" class="px-4 py-2 rounded border border-blue-700 text-blue-700 font-semibold hover:bg-blue-50">Registrarse</a>
                        @endauth
                    </div>
                </div>
            </header>

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
