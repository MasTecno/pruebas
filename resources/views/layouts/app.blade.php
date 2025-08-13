<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("titulo")</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    @vite(["resources/css/app.css", "resources/js/app.js"])
</head>
<body>

    @yield("navBarMain")
    
    <div class="bg-slate-500 p-0.5">
    </div>

    <main>
        @yield("contenido")
    </main>

    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>

    @stack("scripts")

    <footer class="text-center p-4 bg-gray-500">
        <h6 class="text-white font-semibold text-sm">&reg;{{ now()->format("Y") }} MasTecno</h6>
    </footer>
</body>
</html>