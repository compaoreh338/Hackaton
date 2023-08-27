@props([
    'color' => 'red',
    'icon' => null,
    'classes' => '',
    'variant' => 'contained',
])

@php
    $defaultClasses = 'py-2 px-2 relative';

    $defaultColor =  $color ?? 'red';

    $outlineClasses = "text-red-900 border border-red-900 hover:bg-red-900 hover:text-white";

    $containedClasses = "bg-red-900 text-white hover:bg-red-800";

    $colorClasses = $variant === 'outlined' ? $outlineClasses : $containedClasses;

    $classes = "$defaultClasses  $classes $colorClasses";
@endphp

<button
    {{
        $attributes->merge([
        'type' => 'button',
        'class' => $classes,
        ])
    }}>
    @if($icon)
        <i class="{{ $icon }}"></i>
    @endif
    <span>
        {{ $slot }}
    </span>
</button>
