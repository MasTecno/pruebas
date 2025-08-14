@extends("layouts.app")

@section("titulo")
    Menu principal
@endsection

@section("navBarMain")
    <x-main-navbar />
@endsection

@section("contenido")



    @php
        $usuario = session("usuario_autenticado");
    @endphp
    <h4 class="text-start pl-6 mt-4 mb-4 font-semibold">Bienvenido {{ $usuario->nombre }} {{ $usuario->ape_paterno }}</h4>
    
    <div class="flex sm:flex-col flex-col md:justify-center items-center mt-10 mb-10">


        <div class="container mx-auto px-4 py-10 bg-white shadow-lg rounded-md">    
            

            <h4 class="text-center text-lg font-medium mb-6">Selecciona un modulo</h4>

            <section class="flex flex-col md:flex-row gap-6 justify-evenly items-center">
                <div class="w-50 rounded-md border border-slate-200 hover:bg-slate-100 shadow">
                    <button type="button" class="w-full text-slate-500 font-bold p-6 cursor-pointer" id="btn-conta" 
                    data-route="{{ route("contabilidad.index") }}">
                        Contabilidad
                    </button>
                </div>
                <div class="w-50 rounded-md border border-slate-200 hover:bg-slate-100 shadow">
                    <button type="button" class="w-full text-slate-500 font-bold p-6 cursor-pointer" id="btn-remu"
                    data-route="{{ route("remu.index") }}">
                        Remuneraciones
                    </button>
                </div>
                <div class="w-50 rounded-md">
                    <button type="button" class="w-full text-slate-500 font-bold p-6 
                    shadow border border-slate-200 rounded cursor-pointer" 
                    id="btn-renta">
                        Renta
                    </button>
                </div>
            </section>

        </div>
    </div>
@endsection

@push("scripts")
    <script>

        function handleFetchErrors(response) {
            if (!response.ok) {
                throw Error(response.statusText);
            }
            return response.json();
        }

        function accesoModulos() {
            const modulos = @json(session("accesos", []));
            console.log(modulos);
            
            const botones = {
                conta: document.getElementById("btn-conta"),
                remu: document.getElementById("btn-remu"),
                renta: document.getElementById("btn-renta")
            };

            Object.entries(botones).forEach(([modulo, boton]) => {
                if (!modulos[modulo]) {
                    boton.disabled = true;
                    boton.classList.add("bg-slate-300");
                    boton.classList.remove("cursor-pointer");
                }

                boton.addEventListener("click", () => {
                    const ruta = boton.dataset.route;
                    if (ruta) {
                        window.location.href = ruta;
                    }
                });
            });
        
        }
        
        document.addEventListener("DOMContentLoaded", function () {
            accesoModulos();
        });

    </script>    
@endpush