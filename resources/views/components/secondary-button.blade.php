<button {{ $attributes->merge(['type' => 'button', 'class' => 'py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-gray-600 text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 disabled:opacity-50 disabled:pointer-events-none']) }}>
    {{ $slot }}
</button>
