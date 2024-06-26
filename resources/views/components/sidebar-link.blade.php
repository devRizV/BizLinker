<!-- resources/views/components/sidebar-link.blade.php -->
@props(['href', 'active' => false])

@php
$classes = ($active ?? false)
            ? 'block py-2.5 px-4 rounded transition duration-200 bg-gray-700 text-white'
            : 'block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
