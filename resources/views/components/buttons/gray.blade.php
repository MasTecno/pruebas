@props([
    "icono" => null,
])


@php
    //* Ver la integracion de fontawesome antes de usar los iconos 
    $iconos = [
        "save" => '<i class="fa-solid fa-check"></i>',
        "edit" => '<i class="fa-solid fa-pen-to-square"></i>',
        "delete" => '<i class="fa-solid fa-trash"></i>',
    ];
@endphp

<button {{ $attributes->merge([
    "class" => "w-full p-2 bg-slate-400 hover:bg-slate-500 text-white font-medium rounded cursor-pointer flex items-center justify-center"
]) }}>
    @if ($icono && isset($iconos[$icono]))
        {{ $iconos[$icono] }}
    @endif
    {{ $slot }}
</button>
