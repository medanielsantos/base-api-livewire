<button {{ $attributes->merge(['type' => 'submit', 'class' => 'px-3 py-2 mt-8 rounded bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 rounded-sm block focus:outline-none focus:ring-offset-2 focus:ring-2 w-auto text-white text-sm font-semibold items-center justify-center',
]) }}>
    {{ $slot }}
</button>
