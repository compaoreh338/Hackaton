@props([
    'color' => 'red',
    'icon' => null,
    'classes' => '',
    'variant' => 'contained',
    'href' => '#',
])

@php
    $defaultClasses = 'py-3 px-2 relative uppercase text-xs tracking-widest';

    $defaultColor =  $color ?? 'red';

    $outlineClasses = "text-$defaultColor-900 border border-$defaultColor-900 hover:bg-$defaultColor-900 hover:text-white";

    $containedClasses = "bg-$defaultColor-900 text-white hover:bg-$defaultColor-800";

    $colorClasses = $variant === 'outlined' ? $outlineClasses : $containedClasses;

    $classes = "$defaultClasses  $classes $colorClasses";
@endphp

<a
    href="{{ $href }}"
    {{
        $attributes->merge([
        'class' => $classes,
        ])
    }}>
    @if($icon)
        <i class="{{ $icon }}"></i>
    @endif
    <span>
        {{ $slot }}
    </span>
</a>
