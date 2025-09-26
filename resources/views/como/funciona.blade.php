@extends('layouts.app')

@section('contenido2')
{{-- SECCIÓN ROADMAP UBITEC --}}
<section class="py-16 sm:py-20 lg:py-24 bg-gradient-to-b from-blue-50 via-purple-50 to-pink-50 relative overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Título -->
        <div class="max-w-3xl mx-auto text-center">
            <p class="text-sm sm:text-base tracking-widest text-purple-600 font-bold uppercase drop-shadow-md animate-pulse">
                Como funciona UBITEC
            </p>
            <h2 class="mt-4 text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight text-gray-900 drop-shadow-lg">
                Tu logística optimizada paso a paso
            </h2>
        </div>

        <!-- Roadmap -->
        <div class="relative mt-16 sm:mt-20">
            <!-- Línea central vertical: solo visible en md+ -->
            <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full border-l-4 border-purple-300"></div>

            <div class="space-y-12 sm:space-y-16">
                {{-- Paso 1 --}}
                <div class="flex flex-col md:flex-row items-center md:items-start">
                    <div class="w-full md:w-1/2 md:pr-6 lg:pr-12 text-center md:text-right">
                        <h3 class="text-xl sm:text-2xl font-semibold text-gray-900 mb-2">Carga tus direcciones</h3>
                        <p class="text-gray-700 text-base sm:text-lg">
                            Ingresa manualmente o sube tus paradas y entregas en un archivo para comenzar.
                        </p>
                    </div>
                    <div class="relative z-10 w-16 h-16 sm:w-20 sm:h-20 bg-purple-500 text-white flex items-center justify-center rounded-full shadow-xl animate-heartbeat my-6 md:my-0 mx-auto md:mx-0">
                        <span class="text-xl sm:text-2xl font-bold">1</span>
                    </div>
                    <div class="w-full md:w-1/2 md:pl-6 lg:pl-12 mt-4 md:mt-0">
                        <img src="{{ asset('img/pasos/paso1.png') }}" alt="Paso 1" class="rounded-2xl shadow-lg w-full h-auto object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                </div>

                {{-- Paso 2 --}}
                <div class="flex flex-col md:flex-row md:flex-row-reverse items-center md:items-start">
                    <div class="w-full md:w-1/2 md:pl-6 lg:pl-12 text-center md:text-left">
                        <h3 class="text-xl sm:text-2xl font-semibold text-gray-900 mb-2">La IA organiza</h3>
                        <p class="text-gray-700 text-base sm:text-lg">
                            Nuestro algoritmo calcula en segundos la ruta más eficiente para tu equipo.
                        </p>
                    </div>
                    <div class="relative z-10 w-16 h-16 sm:w-20 sm:h-20 bg-pink-500 text-white flex items-center justify-center rounded-full shadow-xl animate-heartbeat my-6 md:my-0 mx-auto md:mx-0">
                        <span class="text-xl sm:text-2xl font-bold">2</span>
                    </div>
                    <div class="w-full md:w-1/2 md:pr-6 lg:pr-12 mt-4 md:mt-0">
                        <img src="{{ asset('img/pasos/paso2.png') }}" alt="Paso 2" class="rounded-2xl shadow-lg w-full h-auto object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                </div>

                {{-- Paso 3 --}}
                <div class="flex flex-col md:flex-row items-center md:items-start">
                    <div class="w-full md:w-1/2 md:pr-6 lg:pr-12 text-center md:text-right">
                        <h3 class="text-xl sm:text-2xl font-semibold text-gray-900 mb-2">Monitoreo en tiempo real</h3>
                        <p class="text-gray-700 text-base sm:text-lg">
                            Visualiza vehículos y pedidos en el mapa con actualizaciones instantáneas.
                        </p>
                    </div>
                    <div class="relative z-10 w-16 h-16 sm:w-20 sm:h-20 bg-green-500 text-white flex items-center justify-center rounded-full shadow-xl animate-heartbeat my-6 md:my-0 mx-auto md:mx-0">
                        <span class="text-xl sm:text-2xl font-bold">3</span>
                    </div>
                    <div class="w-full md:w-1/2 md:pl-6 lg:pl-12 mt-4 md:mt-0">
                        <img src="{{ asset('img/pasos/paso3.png') }}" alt="Paso 3" class="rounded-2xl shadow-lg w-full h-auto object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                </div>

                {{-- Paso 4 --}}
                <div class="flex flex-col md:flex-row md:flex-row-reverse items-center md:items-start">
                    <div class="w-full md:w-1/2 md:pl-6 lg:pl-12 text-center md:text-left">
                        <h3 class="text-xl sm:text-2xl font-semibold text-gray-900 mb-2">Mide resultados</h3>
                        <p class="text-gray-700 text-base sm:text-lg">
                            Genera reportes y estadísticas detalladas para tomar mejores decisiones logísticas.
                        </p>
                    </div>
                    <div class="relative z-10 w-16 h-16 sm:w-20 sm:h-20 bg-indigo-500 text-white flex items-center justify-center rounded-full shadow-xl animate-heartbeat my-6 md:my-0 mx-auto md:mx-0">
                        <span class="text-xl sm:text-2xl font-bold">4</span>
                    </div>
                    <div class="w-full md:w-1/2 md:pr-6 lg:pr-12 mt-4 md:mt-0">
                        <img src="{{ asset('img/pasos/paso4.png') }}" alt="Paso 4" class="rounded-2xl shadow-lg w-full h-auto object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Animaciones --}}
<style>
@keyframes heartbeat {
    0%, 100% { transform: scale(1); }
    25% { transform: scale(1.05); }
    50% { transform: scale(1.1); }
    75% { transform: scale(1.05); }
}
.animate-heartbeat { animation: heartbeat 2s ease-in-out infinite; }
</style>

@endsection
