
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
        
        
        
        <body class="bg-gradient-to-r from-blue-400 to-purple-500 flex items-center justify-center min-h-screen">
        <div class="bg-white rounded-lg shadow-lg p-8 max-w-md w-full">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Crear una Cuenta</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Nombre -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Nombre</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" 
                        placeholder="Ingrese su nombre">
                    <x-input-error :messages="$errors->get('name')" class="text-red-500 text-sm mt-2" />
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" 
                        placeholder="Ingrese su correo electrónico">
                    <x-input-error :messages="$errors->get('email')" class="text-red-500 text-sm mt-2" />
                </div>

                <!-- Contraseña -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-semibold mb-2">Contraseña</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" 
                        placeholder="Ingrese su contraseña">
                    <x-input-error :messages="$errors->get('password')" class="text-red-500 text-sm mt-2" />
                </div>

                <!-- Confirmar Contraseña -->
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700 font-semibold mb-2">Confirmar Contraseña</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" 
                        placeholder="Confirme su contraseña">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="text-red-500 text-sm mt-2" />
                </div>

                <button type="submit" 
                    class="w-full bg-blue-500 text-white py-2 rounded-lg font-semibold hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50">
                    Registrarse
                </button>
            </form>

            <p class="text-center text-gray-600 mt-4">
                ¿Ya tienes una cuenta? 
                <a href="{{ route('login') }}" class="text-blue-500 font-semibold">Iniciar Sesión</a>
            </p>
        </div>
    </body>
</html>
