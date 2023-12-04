@props([
    'type' => 'text',
    'name', 'id' => null,
    'label' => null,
    'value' => null,
    'wire' => null,
    'containerClass' => null,
    'required' => false
])

@php
    $error = str_replace(['[', ']'], ['.', ''], $name);
    $id = $id ?? $name;
    $wire = is_bool($wire) && $wire ? $error : $wire;
    $value = old($error, $value);

    $class = 'mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm';
    if ($attributes->get('disabled')) {
        $class .= ' border-gray-300 bg-gray-200 text-gray-600 cursor-not-allowed';
    } else {
        if ($errors->has($error)) {
            $class .= ' border-red-500 focus:border-red-500';
        } else {
            $class .= 'border border-gray-100 focus:ring-offset-2 focus:ring-2';
        }
    }
@endphp

<div @if ($containerClass) class="{{ $containerClass }}" @endif>

    <x-label :for="$id" :required="$required">@lang($label)</x-label>
    <input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}"
           @if ($type !== 'password') value="{{ $value }}" @endif
           @if ($wire) wire:model.live="{{ $name }}" @endif
        {{ $attributes->merge(['class' => $class]) }}
    />

    <x-input.error :name="$error" />
</div>
