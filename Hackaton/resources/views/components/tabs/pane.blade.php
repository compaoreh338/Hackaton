@props(['title', 'for'])

<div class="hidden p-4 rounded-lg rounded-tl-none bg-gray-50" id="panel-{{ $for }}" role="tabpanel"
     aria-labelledby="tab-{{ $for }}">
    <div class="px-2 py-2">
        <div class="flex flex-col">
            {{ $slot }}
        </div>
    </div>
</div>
