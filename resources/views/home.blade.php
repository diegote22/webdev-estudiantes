<x-app-layout>
    <!-- Hero/Banner principal -->
    <section class="bg-gradient-to-r from-blue-50 to-blue-100 py-16">
        <div class="container mx-auto flex flex-col md:flex-row items-center gap-12 px-4">
            <div class="flex-1 text-center md:text-left">
                <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Aprende lo que quieras, cuando quieras</h1>
                <p class="text-lg mb-6 text-gray-700">Cursos online de calidad, dictados por expertos en salud. Preparate para el ingreso a Medicina y apóyate en tu primer año universitario.</p>
                <a href="#cursos" class="inline-block px-8 py-3 rounded bg-blue-700 text-white font-semibold text-lg shadow hover:bg-blue-800 transition">Ver cursos</a>
            </div>
            <div class="flex-1 flex justify-center">
                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=500&q=80" alt="Estudiantes de salud" class="rounded-2xl shadow-lg w-full max-w-xs md:max-w-md">
            </div>
        </div>
    </section>

    <!-- Cursos destacados -->
    <section class="container mx-auto py-16 px-4" id="cursos">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold">Cursos recomendados</h2>
            <a href="#" class="text-blue-700 font-semibold hover:underline">Ver todos los cursos</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ([
                [
                    'titulo' => 'Ingreso a Medicina',
                    'desc' => 'Curso intensivo para el examen de ingreso a Medicina.',
                    'precio' => '$12.000',
                    'img' => 'https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=400&q=80',
                ],
                [
                    'titulo' => 'Biología para Salud',
                    'desc' => 'Aprende biología desde cero, ideal para carreras de salud.',
                    'precio' => '$9.500',
                    'img' => 'https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=400&q=80',
                ],
                [
                    'titulo' => 'Apoyo 1er Año Medicina',
                    'desc' => 'Acompañamiento y tutorías para estudiantes de primer año.',
                    'precio' => '$8.000',
                    'img' => 'https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?auto=format&fit=crop&w=400&q=80',
                ],
                [
                    'titulo' => 'Química para Ingreso',
                    'desc' => 'Domina los temas clave de química para el examen de ingreso.',
                    'precio' => '$10.000',
                    'img' => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=400&q=80',
                ],
                [
                    'titulo' => 'Técnicas de Estudio',
                    'desc' => 'Mejora tu rendimiento académico con técnicas probadas.',
                    'precio' => '$7.500',
                    'img' => 'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80',
                ],
                [
                    'titulo' => 'Enfermería Básica',
                    'desc' => 'Curso introductorio para quienes desean ingresar a Enfermería.',
                    'precio' => '$9.000',
                    'img' => 'https://images.unsplash.com/photo-1512070679279-c2f999098c01?auto=format&fit=crop&w=400&q=80',
                ],
            ] as $curso)
            <div class="bg-white rounded-xl shadow p-6 flex flex-col">
                <img src="{{ $curso['img'] }}" alt="{{ $curso['titulo'] }}" class="rounded-lg mb-4 h-40 object-cover">
                <h3 class="font-bold text-xl mb-2">{{ $curso['titulo'] }}</h3>
                <p class="text-gray-600 mb-4 flex-1">{{ $curso['desc'] }}</p>
                <div class="flex items-center justify-between mt-2">
                    <span class="text-lg font-bold text-blue-700">{{ $curso['precio'] }}</span>
                    <a href="#" class="px-4 py-2 rounded bg-blue-700 text-white font-semibold hover:bg-blue-800">Detalles</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Beneficios de la plataforma -->
    <section class="bg-blue-50 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-8 text-center">¿Por qué elegir WebDev Salud?</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="flex flex-col items-center text-center">
                    <div class="bg-white rounded-full p-4 mb-2 shadow"><i class="fa-solid fa-clock text-2xl text-blue-700"></i></div>
                    <h3 class="font-semibold mb-1">Acceso 24/7</h3>
                    <p class="text-gray-600">Estudia a tu ritmo, cuando quieras y desde donde quieras.</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="bg-white rounded-full p-4 mb-2 shadow"><i class="fa-solid fa-certificate text-2xl text-blue-700"></i></div>
                    <h3 class="font-semibold mb-1">Certificados</h3>
                    <p class="text-gray-600">Obtén certificados al finalizar cada curso y suma valor a tu CV.</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="bg-white rounded-full p-4 mb-2 shadow"><i class="fa-solid fa-users text-2xl text-blue-700"></i></div>
                    <h3 class="font-semibold mb-1">Comunidad</h3>
                    <p class="text-gray-600">Forma parte de una comunidad de estudiantes y docentes.</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="bg-white rounded-full p-4 mb-2 shadow"><i class="fa-solid fa-headset text-2xl text-blue-700"></i></div>
                    <h3 class="font-semibold mb-1">Soporte</h3>
                    <p class="text-gray-600">Acompañamiento y ayuda personalizada durante tu cursada.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cómo funciona -->
    <section class="bg-white py-16" id="como-funciona">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-8 text-center">¿Cómo funciona?</h2>
            <div class="flex flex-col md:flex-row gap-8 justify-center">
                <div class="flex-1 flex flex-col items-center">
                    <div class="bg-blue-100 rounded-full p-4 mb-2"><i class="fa-solid fa-user-plus text-2xl text-blue-700"></i></div>
                    <h3 class="font-semibold mb-1">1. Regístrate</h3>
                    <p class="text-gray-600 text-center">Crea tu cuenta gratis y accede a todos los cursos.</p>
                </div>
                <div class="flex-1 flex flex-col items-center">
                    <div class="bg-blue-100 rounded-full p-4 mb-2"><i class="fa-solid fa-book-open text-2xl text-blue-700"></i></div>
                    <h3 class="font-semibold mb-1">2. Elige tu curso</h3>
                    <p class="text-gray-600 text-center">Selecciona el curso que más se adapte a tus objetivos.</p>
                </div>
                <div class="flex-1 flex flex-col items-center">
                    <div class="bg-blue-100 rounded-full p-4 mb-2"><i class="fa-solid fa-laptop-medical text-2xl text-blue-700"></i></div>
                    <h3 class="font-semibold mb-1">3. Aprende online</h3>
                    <p class="text-gray-600 text-center">Accede a las clases y materiales desde cualquier dispositivo.</p>
                </div>
                <div class="flex-1 flex flex-col items-center">
                    <div class="bg-blue-100 rounded-full p-4 mb-2"><i class="fa-solid fa-certificate text-2xl text-blue-700"></i></div>
                    <h3 class="font-semibold mb-1">4. Certifícate</h3>
                    <p class="text-gray-600 text-center">Obtén tu certificado al finalizar y suma valor a tu carrera.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonios -->
    <section class="bg-blue-50 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-8 text-center">Testimonios de estudiantes</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center text-center">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Estudiante" class="w-20 h-20 rounded-full mb-4">
                    <p class="text-gray-700 mb-2">“Gracias a WebDev Salud aprobé el ingreso a Medicina. Los profesores son excelentes y el material muy completo.”</p>
                    <span class="font-semibold text-blue-700">María López</span>
                </div>
                <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center text-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Estudiante" class="w-20 h-20 rounded-full mb-4">
                    <p class="text-gray-700 mb-2">“El curso de biología me ayudó muchísimo en mi primer año. Recomiendo la plataforma a todos.”</p>
                    <span class="font-semibold text-blue-700">Juan Pérez</span>
                </div>
                <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center text-center">
                    <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Estudiante" class="w-20 h-20 rounded-full mb-4">
                    <p class="text-gray-700 mb-2">“Me encantó la flexibilidad y el acompañamiento. ¡Volvería a elegir WebDev Salud!”</p>
                    <span class="font-semibold text-blue-700">Lucía Fernández</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA final -->
    <section class="bg-blue-700 py-16 text-white text-center">
        <h2 class="text-2xl font-bold mb-4">¿Listo para comenzar?</h2>
        <p class="mb-6">Regístrate gratis y accede a todos los cursos de ingreso y apoyo en salud.</p>
        <a href="#" class="px-6 py-3 rounded bg-white text-blue-700 font-semibold hover:bg-blue-100">Crear cuenta</a>
    </section>
</x-app-layout>
