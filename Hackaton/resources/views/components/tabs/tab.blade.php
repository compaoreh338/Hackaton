@props(['title', 'for'])

<li class="mr-2">
    <button type="button" id="tab-{{ $for }}" data-tabs-target="#panel-{{ $for }}" type="button"
            role="tab"
            aria-controls="panel-{{ $for }}" :aria-selected="isActive('{{ $for }}') ? 'true' : 'false'"
            @click="setActive('{{ $for }}')"
            class="inline-block p-4 rounded-t-lg aria-selected:bg-gray-50 hover:text-gray-600 hover:bg-gray-50">{{ $title }}</button>
</li>
