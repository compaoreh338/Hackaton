@props(['name', 'value', 'label', 'required' => false, 'errors' => [], 'options' => [], 'optionValueField' => null, 'labelValueField' => null, 'renderer' => null, 'includeNoneOption' => false])
<div>
    <x-inputs.label :for="$name" class="mb-2">
        {{ $label }}{{ $required ? '*' : '' }}
    </x-inputs.label>

    <select id="{{ $name }}" name="{{ $name }}"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 bg-transparent dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        {{ $required ? 'required' : '' }}>
        @if ($includeNoneOption)
            <option value="">Aucun</option>
        @endif
        @foreach ($options as $key => $option)
            @if ($optionValueField)
                <option value="{{ $option->$optionValueField }}"
                    {{ $option->$optionValueField === $value ? 'selected' : '' }}>
                    {{ $renderer ? $renderer($option) : $option->$labelValueField }}
                </option>
            @else
                <option value="{{ $key }}" {{ $key === $value ? 'selected' : '' }}>
                    {{ $option }}
                </option>a tes
            @endif
        @endforeach
    </select>

    <x-inputs.error :messages="$errors" class="mt-2" />
</div>
