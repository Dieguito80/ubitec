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


            <body class="bg-cover bg-center"
            style="background-image:url(https://res.cloudinary.com/dkt1t22qc/image/upload/v1742357451/Prestataires_Documents/cynbxx4vxvgv2wrpakiq.jpg)">
            
            <div class="flex h-screen items-center justify-center">
                <div class="flex flex-col items-center space-y-8">

                <!-- Logo -->
                <div>
                    <img
                    src="https://res.cloudinary.com/dkt1t22qc/image/upload/v1742348949/Prestataires_Documents/smj7n1bdlpjsfsotwpco.png"
                    alt="Logo UbiteC"
                    class="cursor-pointer" />
                </div>

                <!-- Formulario Login -->
                <div class="w-80 rounded-[20px] bg-white p-8" style="box-shadow:#00000057 1px 3px 4px">

                    <h1 class="mb-4 text-center text-3xl font-bold text-black" style="text-shadow:#00000063 0px 3px 5px">
                    ¡Bienvenido de nuevo!
                    </h1>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}" class="space-y-4">
                        @csrf

                        <!-- Email -->
                        <div>
                            <input id="email" type="email" name="email" :value="old('email')" required autofocus
                                placeholder="Correo Electrónico"
                                class="w-full rounded-md bg-[#E9EFF6] p-2.5 placeholder:text-[#000000]"
                                style="box-shadow:rgb(0 0 0 / 21%) 0px 7px 5px 0px" />
                            <x-input-error :messages="$errors->get('email')" class="text-red-500 text-sm mt-1" />
                        </div>

                        <!-- Contraseña -->
                        <div>
                            <input id="password" type="password" name="password" required
                                placeholder="Contraseña"
                                class="w-full rounded-md bg-[#E9EFF6] p-2.5 placeholder:text-[#000000]"
                                style="box-shadow:rgb(0 0 0 / 21%) 0px 7px 5px 0px" />
                            <x-input-error :messages="$errors->get('password')" class="text-red-500 text-sm mt-1" />
                        </div>

                        <!-- Recordarme y Olvidé contraseña -->
                        <div class="flex items-center justify-between mb-4 pt-2 text-[10px]">
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="remember" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                                <span class="ml-2 text-[#228CE0]">Recordarme</span>
                            </label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-[#228CE0] hover:underline">¿Olvidaste tu contraseña?</a>
                            @endif
                        </div>

                        <!-- Botón Iniciar Sesión -->
                        <div class="mb-4 flex justify-center">
                            <button type="submit"
                                class="h-10 w-full cursor-pointer rounded-md bg-gradient-to-br from-[#7336FF] to-[#3269FF] text-white shadow-md shadow-blue-950">
                                Iniciar Sesión
                            </button>
                        </div>

                    </form>

                    <!-- Registro -->
                    <div class="text-center text-[#969696]">
                        ¿No tienes una cuenta?
                        <a href="{{ route('register') }}" class="cursor-pointer text-[#7337FF] hover:underline">Regístrate</a>
                    </div>

                </div>
                </div>
            </div>
            </body>
    </html>