@props(['name', 'value' => '', 'checked' => false, 'label', 'required' => false, 'errors' => [], 'inputClasses' => ''])
<div {{$attributes->merge(['class' => "flex items-center"])}}>
    <input {{$checked ? 'checked':''}} id="{{$name}}" name="{{$name}}" type="checkbox" value="{{$value}}"
           class="w-4 h-4 text-red-900 bg-gray-100 border-gray-500 focus:ring-red-900 focus:ring-0"/>
    <x-inputs.label :for="$name" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
        {{ $label }}
    </x-inputs.label>
</div>
