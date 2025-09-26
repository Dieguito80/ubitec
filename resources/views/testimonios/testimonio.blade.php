@extends('layouts.app')

@section('contenido3')

{{-- SECCIÓN TESTIMONIOS MODERNA Y LLAMATIVA --}}
<section class="py-24 bg-gradient-to-b from-gray-100 via-purple-50 to-blue-50 overflow-hidden relative">
    <div class="container mx-auto px-6 lg:px-8 relative z-10">

        <div class="max-w-3xl mx-auto text-center">
            <p class="text-sm sm:text-base tracking-widest text-indigo-500 font-bold uppercase drop-shadow-md animate-pulse">
                Opiniones de nuestros clientes
            </p>
            <h2 class="mt-4 text-3xl font-bold leading-tight text-gray-900 sm:text-4xl lg:text-5xl drop-shadow-lg">
                Ellos confían en <span class="text-indigo-600">UBITEC</span>
            </h2>
        </div>

        <div class="flex flex-wrap justify-center gap-8 mt-16">

            <!-- Testimonio 1 -->
            <div class="bg-white p-8 rounded-3xl shadow-[0_20px_50px_rgba(99,102,241,0.2)] flex flex-col items-center text-center transform transition duration-500 hover:-translate-y-4 hover:rotate-1 hover:shadow-[0_25px_60px_rgba(99,102,241,0.35)]" data-aos="fade-up">
                <img src="{{ asset('img/testimonios/cliente1.jpg') }}" alt="Cliente 1" class="w-32 h-32 rounded-full mb-6 shadow-lg animate-heartbeat">
                    <p class="text-gray-700 mb-4 italic">
                        “Desde que uso UBITEC, organizar mis rutas diarias se volvió mucho más fácil y eficiente. ¡Ahora llego a tiempo a todas mis entregas y puedo concentrarme en otros detalles de mi negocio!”
                    </p>
                <h3 class="text-lg font-semibold text-gray-900">Camila Rodríguez</h3>
                <p class="text-sm text-gray-500">Dueña de Tienda de Productos</p>

            </div>

            <!-- Testimonio 2 -->
            <div class="bg-white p-8 rounded-3xl shadow-[0_20px_50px_rgba(236,72,153,0.2)] flex flex-col items-center text-center transform transition duration-500 hover:-translate-y-4 hover:-rotate-2 hover:shadow-[0_25px_60px_rgba(236,72,153,0.35)]" data-aos="fade-up" data-aos-delay="150">
                <img src="{{ asset('img/testimonios/cliente2.jpg') }}" alt="Cliente 2" class="w-32 h-32 rounded-full mb-6 shadow-lg animate-heartbeat">
                    <p class="text-gray-700 mb-4 italic">
                        “UBITEC me ayudó a planificar mis rutas de manera más rápida y eficiente. Ahora puedo atender más clientes en menos tiempo sin perder el control de mis entregas.”
                    </p>
                <h3 class="text-lg font-semibold text-gray-900">Andrés Morales</h3>
                <p class="text-sm text-gray-500">Propietario de Servicios de Mensajería</p>

            </div>

            <!-- Testimonio 3 -->
            <div class="bg-white p-8 rounded-3xl shadow-[0_20px_50px_rgba(34,197,94,0.2)] flex flex-col items-center text-center transform transition duration-500 hover:-translate-y-4 hover:rotate-2 hover:shadow-[0_25px_60px_rgba(34,197,94,0.35)]" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('img/testimonios/cliente3.jpg') }}" alt="Cliente 3" class="w-32 h-32 rounded-full mb-6 shadow-lg animate-heartbeat">
                    <p class="text-gray-700 mb-4 italic">
                        “Gracias a UBITEC, puedo gestionar todas mis entregas desde un solo lugar, evitando errores y mejorando la satisfacción de mis clientes.”
                    </p>
                <h3 class="text-lg font-semibold text-gray-900">Carlos Ramírez</h3>
                <p class="text-sm text-gray-500">Encargado de Logística</p>

            </div>

        </div>
    </div>

    <!-- Elementos decorativos flotantes -->
    <div class="absolute top-0 left-10 w-32 h-32 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-float"></div>
    <div class="absolute bottom-10 right-20 w-48 h-48 bg-pink-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-float"></div>
</section>

{{-- Animaciones --}}
<style>
/* Flotante decorativo */
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}
.animate-float { animation: float 6s ease-in-out infinite; }

/* Latido de las imágenes */
@keyframes heartbeat {
    0%, 100% { transform: scale(1); }
    25% { transform: scale(1.05); }
    50% { transform: scale(1.1); }
    75% { transform: scale(1.05); }
}
.animate-heartbeat { animation: heartbeat 2s ease-in-out infinite; }
</style>

@endsection
