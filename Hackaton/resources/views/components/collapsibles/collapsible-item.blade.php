@props([
    'label',
    'id',
    'active' => false,
])

<div
    {{ $attributes->merge(['class' => 'bg-transparent w-full px-2 my-2 ml-5' . ($active ? ' text-black font-bold text-bold' : '')]) }}
    @click="$dispatch('item-selected', '{{ $id }}')"
>
    {{ $slot }}
</div>
