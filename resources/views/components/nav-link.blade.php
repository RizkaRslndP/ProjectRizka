@props([
    'active' => false,
    'mobile' => false,
])

@php
    $base = 'font-medium rounded-md transition';

    $desktop = 'px-3 py-2 text-sm';
    $mobileClass = 'block px-3 py-2 text-base';

    $activeClass = 'bg-gray-950/50 text-white';
    $inactiveClass = 'text-gray-300 hover:bg-white/5 hover:text-white';

    $classes = implode(' ', [$base, $mobile ? $mobileClass : $desktop, $active ? $activeClass : $inactiveClass]);
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
</a>
