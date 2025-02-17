@props(['disabled' => false])

<input type="checkbox" @disabled($disabled) {{ $attributes->merge(['class' => 'shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500']) }}>