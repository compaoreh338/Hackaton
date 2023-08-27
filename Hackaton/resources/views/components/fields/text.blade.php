@props(['name', 'value', 'label', 'required' => false, 'placeholder' => '', 'errors' => [], 'type' => 'text'])
<div>
    <x-inputs.label :for="$name" class="mb-2">
        {{ $label }}{{ $required ? '*' : '' }}
    </x-inputs.label>

    <x-inputs.text :id="$name"
                  class="block mt-1 w-full"
                  :type="$type"
                  :name="$name"
                  :value="$value"
                  :required="$required"
                  autofocus
                  :autocomplete="$name"
                  placeholder="{{ $placeholder }}"/>

    <x-inputs.error :messages="$errors" class="mt-2"/>
</div>
