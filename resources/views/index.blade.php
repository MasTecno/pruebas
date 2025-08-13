<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar sesion</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    
    <section class="min-h-screen flex justify-center items-center">
        <form method="POST" action="{{ route("login.store") }}" class="bg-slate-50 p-12 rounded shadow-md w-full max-w-md md:max-w-xl">
            @csrf
            <div class="mb-4">
                <label for="servidor" class="pb-1 text-sm font-medium">Servidor</label>
                <input
                    type="text"
                    name="servidor"
                    id="servidor"
                    placeholder="Ingresa servidor"
                    class="w-full p-1.5 mt-1 border bg-white border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-gray-300"
                    value="{{ old("servidor") }}"
                >
            </div>

            <div class="mb-4">
                <label for="email" class="pb-1 text-sm font-medium">Correo Electronico</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Ingresa correo"
                    class="w-full p-1.5 mt-1 border bg-white border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-gray-300"
                    value="{{ old("email") }}"
                >
            </div>

            <div class="mb-4">
                <label for="password" class="pb-1 text-sm font-medium">Contraseña</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Ingresa contraseña"
                    class="w-full p-1.5 mt-1 border bg-white border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-gray-300"
                >
            </div>

            @if (session("error"))
                <p class="text-center p-1 bg-red-200 border border-red-400 rounded text-sm font-semibold">
                    {{ session("error") }}
                </p>
            @endif

            <div class="mt-6">
                <x-buttons.green type="submit">
                    Ingresar
                </x-buttons.green>  
            </div>

            {{-- <div class="mt-4 flex items-center border rounded border-slate-200">
                <label class="pl-2.5 pr-2.5 pt-1.5 pb-1.5 bg-slate-200 rounded-l" for="rut">
                    Rut
                </label>
                <input class= "bg-white flex-1 w-100 focus:outline-none focus:ring-2 focus:ring-slate-300 p-1.5 rounded-r" 
                name="rut" id="rut">
            </div> --}}

            
            
        </form>
    </section>



</body>
</html>