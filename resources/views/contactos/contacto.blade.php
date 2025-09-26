@extends('layouts.app')

@section('contenido4')

{{-- SECCIÓN CONTACTO --}}
<section class="relative py-28 bg-gradient-to-br from-indigo-100 via-white to-purple-100 overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-purple-300/40 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-pink-300/40 rounded-full blur-3xl animate-pulse"></div>
    </div>

    <div class="container mx-auto px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl mx-auto text-center">
            <p class="text-sm sm:text-base tracking-[.25em] text-indigo-500 font-semibold uppercase drop-shadow">
                Contáctanos
            </p>
            <h2 class="mt-4 text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight drop-shadow-sm">
                Hablemos de tu proyecto
            </h2>
            <p class="mt-4 text-lg text-gray-600">
                Estamos aquí para ayudarte a optimizar tus rutas y potenciar tu negocio 🚀
            </p>
        </div>

        <div class="mt-16 max-w-2xl mx-auto backdrop-blur-xl bg-white/70 p-10 rounded-3xl shadow-[0_8px_40px_rgba(0,0,0,0.1)] border border-white/30">
            <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                    <input type="text" name="name" id="name" required
                        class="mt-2 w-full px-4 py-3 rounded-xl border border-gray-200 shadow-sm focus:ring-2 focus:ring-indigo-400 focus:outline-none transition">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" required
                        class="mt-2 w-full px-4 py-3 rounded-xl border border-gray-200 shadow-sm focus:ring-2 focus:ring-indigo-400 focus:outline-none transition">
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Mensaje</label>
                    <textarea name="message" id="message" rows="5" required
                        class="mt-2 w-full px-4 py-3 rounded-xl border border-gray-200 shadow-sm focus:ring-2 focus:ring-indigo-400 focus:outline-none transition"></textarea>
                </div>

                <button type="submit"
                    class="w-full bg-gradient-to-r from-indigo-500 to-purple-500 text-white font-semibold py-3 px-6 rounded-xl shadow-lg hover:shadow-2xl hover:scale-[1.02] transition-transform duration-300">
                    Enviar mensaje ✉️
                </button>
            </form>
        </div>
    </div>
</section>

@endsection
