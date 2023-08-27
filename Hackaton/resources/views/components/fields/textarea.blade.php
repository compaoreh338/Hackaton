@props(['name', 'value', 'label', 'required' => false, 'placeholder' => '', 'errors' => []])
<div>
    <x-inputs.label :for="$name" class="mb-2">
        {{ $label }}{{ $required ? '*' : '' }}
    </x-inputs.label>

    <textarea id="{{ $name }}"
              rows="4"
              name="{{ $name }}"
              class="border-b-1 bg-transparent w-full border-t-1 border-l-1  border-r-1 focus:border-red-900 focus:ring-0">{{ $value }}</textarea>

    <x-inputs.error :messages="$errors" class="mt-2" />
</div>
