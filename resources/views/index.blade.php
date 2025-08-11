/---*****<!DOCTYPE html>
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
        <form class="bg-slate-50 p-12 rounded shadow-md w-full max-w-md md:max-w-xl">
            <div class="mb-4">
                <label for="server" class="p-1 font-medium">Servidor</label>
                <input
                    type="text"
                    name="server"
                    id="server"
                    placeholder="Ingresa servidor"
                    class="w-full p-2 mt-1 border bg-white border-gray-300 rounded-2xl focus:outline-none focus:ring-2 focus:ring-gray-200"
                >
            </div>

            <div class="mb-4">
                <label for="email" class="p-1 font-medium">Correo Electronico</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Ingresa correo"
                    class="w-full p-2 mt-1 border bg-white border-gray-300 rounded-2xl focus:outline-none focus:ring-2 focus:ring-gray-200"
                >
            </div>

            <div class="mb-4">
                <label for="password" class="p-1 font-medium">Contraseña</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Ingresa contraseña"
                    class="w-full p-2 mt-1 border bg-white border-gray-300 rounded-2xl focus:outline-none focus:ring-2 focus:ring-gray-200"
                >
            </div>

            <div class="mt-6">
                <button type="submit" class="w-full p-2 bg-green-400 hover:bg-green-500 text-white font-medium rounded-2xl cursor-pointer">
                    Ingresar
                </button>
            </div>
            
        </form>
    </section>



</body>
</html>