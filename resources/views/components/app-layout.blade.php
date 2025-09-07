@props(['slot'])
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'WebDev Estudiantes') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/282fd0a33c.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-50 text-gray-900">
    <header class="bg-white shadow-sm sticky top-0 z-30">
        <div class="container mx-auto flex items-center justify-between py-4 px-4">
            <!-- Logo -->
            <div class="flex items-center gap-2">
                <a href="/" class="flex items-center gap-2">
                    <img src="/logo.png" alt="Logo WebDev Salud" class="w-10 h-10 rounded-full bg-blue-100 object-cover" />
                    <span class="text-2xl font-bold text-blue-700">WebDev Salud</span>
                </a>
            </div>
            <!-- Menú principal -->
            <nav class="hidden md:flex gap-6 text-sm font-medium">
                <a href="/" class="hover:text-blue-700">Inicio</a>
                <a href="#cursos" class="hover:text-blue-700">Cursos</a>
                <a href="#como-funciona" class="hover:text-blue-700">Cómo funciona</a>
                <a href="#contacto" class="hover:text-blue-700">Contacto</a>
            </nav>
            <!-- Botones de acceso -->
            <div class="flex gap-2">
                <a href="#" class="px-4 py-2 rounded bg-blue-700 text-white font-semibold hover:bg-blue-800">Iniciar sesión</a>
                <a href="#" class="px-4 py-2 rounded border border-blue-700 text-blue-700 font-semibold hover:bg-blue-50">Registrarse</a>
            </div>
        </div>
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer class="bg-white border-t mt-12 py-6 text-center text-gray-500 text-sm">
        © {{ date('Y') }} WebDev Estudiantes. Todos los derechos reservados.
    </footer>
</body>
</html>
