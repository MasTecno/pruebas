<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu principal</title>
    @vite(["resources/css/app.css", "resources/js/app.js"])
</head>
<body class="min-h-screen flex justify-center items-center">

    @php
        $usuario = session("usuario_autenticado");
        $conta = session("conta");
    @endphp

    <main class="container mx-auto px-4 py-10 bg-white shadow-lg rounded-md">    
        <h4 class="text-center mb-4 font-semibold">Bienvenido {{ $usuario->nombre }}</h4>

        <h6 class="text-center mb-6">Selecciona un modulo</h6>

        <section class="flex justify-evenly items-center">
            <div class="p-4 rounded-md border border-slate-200 hover:bg-slate-100 shadow">
                <button class="text-slate-500 font-bold p-4">Contabilidad</button>
            </div>
            <div class="p-4 rounded-md border border-slate-200 hover:bg-slate-100 shadow">
                <a href="#" class="text-slate-500 font-bold p-4">Remuneraciones</a>
            </div>
            <div class="p-4 rounded-md border border-slate-200 hover:bg-slate-100 shadow">
                <a href="#" class="text-slate-500 font-bold p-4">Renta</a>
            </div>
        </section>

    </main>

    <script>

        function handleFetchErrors(response) {
            if (!response.ok) {
                throw Error(response.statusText);
            }
            return response.json();
        }



    </script>
</body> 
</html>