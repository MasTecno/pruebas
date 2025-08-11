<button {{ $attributes->merge(['class' => 'w-full p-2 bg-red-400 hover:bg-red-500 text-white font-medium rounded cursor-pointer']) }}>
    {{ $slot }}
</button>
