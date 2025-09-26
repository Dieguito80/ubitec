@extends('layouts.app')

@section('contenido1')


{{-- SECCIÓN BENEFICIOS --}}
    <section class="bg-white py-20">
        <div class="container mx-auto px-6 lg:px-8">
            
            <h2 class="text-4xl font-bold text-center mb-16">
            ¿Por qué elegir <span class="text-blue-600">UBITEC</span>?
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 text-center">
            
            <!-- Beneficio 1 -->
            <div class="p-6 bg-gray-50 rounded-2xl shadow-lg hover:shadow-xl transition-transform transform hover:-translate-y-2">
                <div class="text-6xl mb-4">⚡</div>
                <h3 class="text-xl font-semibold mb-2 text-gray-800">Ahorro de Tiempo</h3>
                <p class="text-gray-600">
                Rutas optimizadas automáticamente para entregar más en menos tiempo.
                </p>
            </div>

            <!-- Beneficio 2 -->
            <div class="p-6 bg-gray-50 rounded-2xl shadow-lg hover:shadow-xl transition-transform transform hover:-translate-y-2">
                <div class="text-6xl mb-4">📍</div>
                <h3 class="text-xl font-semibold mb-2 text-gray-800">Seguimiento Preciso</h3>
                <p class="text-gray-600">
                Control en tiempo real de vehículos y pedidos desde cualquier dispositivo.
                </p>
            </div>

            <!-- Beneficio 3 -->
            <div class="p-6 bg-gray-50 rounded-2xl shadow-lg hover:shadow-xl transition-transform transform hover:-translate-y-2">
                <div class="text-6xl mb-4">📊</div>
                <h3 class="text-xl font-semibold mb-2 text-gray-800">Analítica Avanzada</h3>
                <p class="text-gray-600">
                Estadísticas claras para tomar mejores decisiones en tu operación logística.
                </p>
            </div>

            <!-- Beneficio 4 -->
            <div class="p-6 bg-gray-50 rounded-2xl shadow-lg hover:shadow-xl transition-transform transform hover:-translate-y-2">
                <div class="text-6xl mb-4">💰</div>
                <h3 class="text-xl font-semibold mb-2 text-gray-800">Reducción de Costos</h3>
                <p class="text-gray-600">
                Menos kilómetros, menos combustible y mayor rentabilidad para tu empresa.
                </p>
            </div>

            </div>
        </div>
    </section>

@endsection
