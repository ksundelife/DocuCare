@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 text-base text-gray-500 font-medium leading-5 text-current border-indigo-700 focus:text-gray-700  transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 border-transparent text-base font-medium leading-5 text-link-300 text-gray-500 hover:text-link-300 focus:outline-none focus:border-indigo-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} >
    {{ $slot }}
</a>
