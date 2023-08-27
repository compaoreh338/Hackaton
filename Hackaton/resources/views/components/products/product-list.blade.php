@props([
    'products' => [],
])

<div {{ $attributes->merge(['class' => 'px-4 w-full']) }}>
    {{ $slot }}
</div>
