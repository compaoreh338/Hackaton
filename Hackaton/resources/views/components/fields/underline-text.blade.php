@props(['name', 'value' => '', 'label', 'required' => false, 'placeholder' => '', 'errors' => [], 'type' => 'text', 'inputClasses' => '', 'disabled' => false])
<div {{$attributes->merge(['class' => "flex items-end"])}}>
    <x-inputs.label :for="$name" class="flex gap-1 whitespace-nowrap mr-5 uppercase">
        <span>{{ $label }}</span>
        <span class="text-red-600">{{ $required ? '*' : '' }}</span>
    </x-inputs.label>

    <x-inputs.text :id="$name"
                   class="border-b-1 bg-transparent w-full border-t-0 border-l-0 border-r-0 focus:border-red-900 focus:ring-0 {{ $inputClasses }}"
                   :type="$type"
                   :name="$name"
                   :value="$value"
                   :required="$required"
                   autofocus
                   :disabled="$disabled"
                   :autocomplete="$name"
                   placeholder="{{ $placeholder }}"/>
    <x-inputs.error :messages="$errors" class="mt-2"/>
</div>
