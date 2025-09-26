@extends('layouts.app')

@section('titulo', 'Dashboard')

@section('contenido2')
<div class="container mx-auto py-20 text-center">
    <h1 class="text-4xl font-bold mb-4 text-gray-900">¡Bienvenido al Dashboard!</h1>
    <p class="text-lg text-gray-700 mb-8">
        Aquí puedes gestionar tu perfil y acceder a todas las funcionalidades.
    </p>

    <a href="{{ route('profile.edit') }}" 
       class="bg-yellow-400 text-gray-900 font-semibold py-3 px-8 rounded-full text-lg md:text-xl transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">
       Editar Perfil
    </a>
</div>
@endsection
