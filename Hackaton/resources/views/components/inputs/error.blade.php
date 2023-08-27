@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-800 space-y-1']) }}>
        @foreach ($messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
