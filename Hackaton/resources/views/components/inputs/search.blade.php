@props([
    'placeholder' => 'Search...',
    'icon' => null,
    'position' => 'right',
    'containerClasses' => '',
    'searchInputClasses' => '',
])

@php
    $containerClasses = 'relative ' . $containerClasses;
    $searchInputClasses = 'px-4 py-2 w-full border rounded-full text-black dark:text-white bg-white dark:bg-gray-800 pl-10 pr-3 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent ' . $searchInputClasses;
@endphp

<div class="{{ $containerClasses }}">
    <input class="{{ $searchInputClasses }}"
           type="search"
           placeholder="{{ $placeholder }}">

    @if($icon)
        <div class="absolute inset-y-0 {{ $position === 'right' ? 'right-5' : 'left-3' }} flex items-center">
            <span class="text-gray-500">
                <i class="{{ $icon }}"></i>
            </span>
        </div>
    @endif
</div>
