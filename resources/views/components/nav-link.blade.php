@props([
    'active' => false,
    'mobile' => false,
])

@php
    $base = 'font-medium rounded-md transition ';

    $desktop = 'px-4 py-3 text-4';
    $mobileClass = 'block px-3 py-auto text-base';

    $activeClass = 'bg-gray-400 text-white';
    $inactiveClass = 'text-gray-700 hover:bg-white/25 hover:text-black';

    $classes = implode(' ', [$base, $mobile ? $mobileClass : $desktop, $active ? $activeClass : $inactiveClass]);
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
</a>
