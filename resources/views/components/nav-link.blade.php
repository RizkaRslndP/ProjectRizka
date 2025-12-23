@props([
    'active' => false,
    'mobile' => false,
])

@php
    $base = 'font-medium rounded-md transition';

    $desktop = 'px-3 py-2 text-4';
    $mobileClass = 'block px-3 py-2 text-base';

    $activeClass = 'bg-white/25 text-white';
    $inactiveClass = 'text-white hover:bg-white/25 hover:text-white';

    $classes = implode(' ', [$base, $mobile ? $mobileClass : $desktop, $active ? $activeClass : $inactiveClass]);
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
</a>
