<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UbiteC2.0 - @yield('titulo')</title>

        {{-- Tailwind --}}
        <script src="https://cdn.tailwindcss.com"></script>

        {{-- CSS con Vite --}}
        @vite('resources/css/app.css')

        <!-- AOS Animate On Scroll -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>

    <body class="bg-gradient-to-br from-stone-100 to-stone-50 m-0 p-0">
        <header id="inicio" class="m-0 p-0 relative">
            <section class="bg-cover bg-center relative m-0 p-0" 
                    style="background-image: url('{{ asset('img/fondo.png') }}');">
                <div class="relative bg-gradient-to-r from-purple-600 to-blue-600 h-screen text-white overflow-hidden">

                    <!-- Imagen de fondo + overlay negro -->
                    <div class="absolute inset-0">
                        <img src="{{ asset('img/fondo.png') }}" 
                            alt="Background Image" 
                            class="object-cover object-center w-full h-full" />
                        <div class="absolute inset-0 bg-black opacity-50"></div>
                    </div>

                    <!-- Logo arriba a la izquierda -->
                    <div class="absolute top-0 left-0 z-20 mt-0 animate-heartbeat">
                        <img src="{{ asset('img/logo.png') }}" 
                            alt="Logo" 
                            class="h-[250px] w-auto">
                    </div>

                    <!-- Registro y Login arriba a la derecha -->
                    <div class="absolute top-0 right-0 z-20 flex items-center space-x-4 p-4">
                        @auth
                            <!-- Usuario logueado -->
                            <a href="{{ route('dashboard') }}" 
                            class="bg-yellow-400 text-gray-900 font-semibold px-4 py-2 rounded-full hover:bg-yellow-300 hover:scale-105 transition duration-300 ease-in-out shadow-lg">
                                Dashboard
                            </a>

                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" 
                                        class="bg-white/20 backdrop-blur-md text-white font-semibold px-4 py-2 rounded-full border border-white/30 hover:bg-white/30 hover:scale-105 transition duration-300 ease-in-out shadow-lg">
                                    Cerrar sesión
                                </button>
                            </form>
                        @else
                            <!-- Usuario no logueado -->
                            <a href="{{ route('login') }}" 
                            class="bg-yellow-400 text-gray-900 font-semibold px-4 py-2 rounded-full hover:bg-yellow-300 hover:scale-105 transition duration-300 ease-in-out shadow-lg">
                                Login
                            </a>
                            <a href="{{ route('register') }}" 
                            class="bg-white/20 backdrop-blur-md text-white font-semibold px-4 py-2 rounded-full border border-white/30 hover:bg-white/30 hover:scale-105 transition duration-300 ease-in-out shadow-lg">
                                Registro
                            </a>
                        @endauth
                    </div>


                    <!-- Contenido central -->
                    <div class="relative z-10 flex flex-col justify-center items-center h-full text-center px-4 mt-4">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-4 m-0">
                            "Rutas Inteligentes: Optimización y Control Total"
                        </h1>
                        <p class="text-lg md:text-xl text-gray-300 mb-8 w-full px-4 md:px-0">
                            Administre sus rutas con precisión, visualice recorridos en tiempo real y optimice cada trayecto mediante inteligencia artificial.
                        </p>
                        <a href="#porque" class="bg-yellow-400 text-gray-900 font-semibold py-3 px-8 rounded-full text-lg md:text-xl transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">
                            Empezar
                        </a>
                    </div>

                </div>
            </section>
        </header>

    {{-- CONTENIDO BENEFICIOS --}}
        <section id="porque" class="container mx-auto py-8 px-4 md:px-6 lg:px-8" data-aos="fade-up">
            @yield('contenido1')
        </section>

        {{-- CONTENIDO CÓMO FUNCIONA --}}
        <section id="funciona" class="container mx-auto py-8 px-4 md:px-6 lg:px-8" data-aos="fade-right">
            @yield('contenido2')
        </section>

        {{-- CONTENIDO TESTIMONIOS --}}
        <section id="opiniones" class="container mx-auto py-8 px-4 md:px-6 lg:px-8" data-aos="zoom-in">
            @yield('contenido3')
        </section>

        {{-- CONTENIDO CONTACTO --}}
        <section id="contacto" class="container mx-auto py-8 px-4 md:px-6 lg:px-8" data-aos="fade-up">
            @yield('contenido4')
        </section>

        {{-- CONTENIDO PIE DE PAGINA --}}
        <section id="footer" class="w-full">
            @yield('contenido5')
        </section>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init({
                duration: 1000,
                once: true,
            });
        </script>

        {{-- Animación heartbeat --}}
        <style>
        @keyframes heartbeat {
            0%, 100% { transform: scale(1); }
            25% { transform: scale(1.05); }
            50% { transform: scale(1.1); }
            75% { transform: scale(1.05); }
        }
        .animate-heartbeat { animation: heartbeat 2s ease-in-out infinite; }
        </style>
    </body>
</html>
