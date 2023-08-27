@props([
    'id',
    'title' => null,
    'isOpen' => true,
    'classes' => '',
    'icon' => null,
])

<div {{ $attributes->merge(['class' => $classes]) }} id="{{ $id }}"
     x-data="{ isOpen: '{{ $isOpen }}'}"
     @item-selected.window="activeItem = $event.detail">
    <button
        @click="isOpen = !isOpen"
        class="w-full flex justify-between items-center p-2 text-black"
        :aria-expanded="isOpen">
        @isset($title)
            <h2 class="text-2xl font-bold flex items-center gap-1.5">
                @isset($icon)
                    <i class="fas fa-{{ $icon }}"></i>
                @endisset
                <span>{{ $title }}</span>
            </h2>
        @endisset
        <i class="fas fa-chevron-down transform transition-transform" x-show="!isOpen" x-transition></i>
        <i class="fas fa-chevron-up transform transition-transform" x-show="isOpen" x-transition></i>
    </button>
    <div class="overflow-hidden transition-max-height duration-500 ease-in-out max-h-0 flex flex-col gap-1.5"
         x-bind:style="'max-height: ' + (isOpen ? 'none' : '0')">
        {{ $slot }}
    </div>
</div>
