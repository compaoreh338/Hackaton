@props([
    'title' => '',
    'border' => true,
    'image' => '',
    'classes' => '',
])

<div {{ $attributes->merge([
    'class' => 'w-full py-4 ' . ($border ? 'border-b-2 border-gray-500' : ' border-none'),
    ]) }}
>
    <div class="flex items-center py-8">
        <div class="flex items-center w-[200px]">
            <img
                class="object-contain w-full"
                src="{{ $image  }}"
                alt="{{ $title }}"
            >
        </div>
        <div class="w-full">

            <div class="flex justify-between grow-2">
                <h2 class="text-xl font-bold">
                    {{ $title }}
                </h2>
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
