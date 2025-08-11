<button {{ $attributes->merge(['class' => 'w-full p-2 bg-green-400 hover:bg-green-500 text-white font-medium rounded cursor-pointer']) }}>
    {{ $slot }}
</button>
