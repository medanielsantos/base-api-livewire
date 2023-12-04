@props(['value'])

<label {{ $attributes->merge(['class' => 'block tracking-wide text-gray-700 text-sm font-medium mb-2']) }}>
    {{ $value ?? $slot }}
</label>
