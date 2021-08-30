<button {{ $attributes->merge(['type' => 'submit',
    'class' => 'inline-flex items-center px-4 py-2 border-2 border-transparent rounded-md font-semibold text-xs text-link-300 hover:text-white tracking-widest hover:bg-5cb31e active:bg-ffffff focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }} style="border-color: #66c323;">
    {{ $slot }}

</button>
{{--<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>--}}
{{--    {{ $slot }}--}}
{{--</button>--}}
