@props([
    'active' => false,
    'tag' => 'button',
    'type' => 'button',
])

<{{ $tag }}
    @if ($tag === 'button')
        type="{{ $type }}"
    @endif
    {{ $attributes->class([
        'filament-tabs-item flex items-center h-8 px-5 font-medium rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-inset',
        'hover:text-gray-800 focus:text-primary-600 dark:text-gray-400 dark:hover:text-gray-300 dark:focus:text-primary-400' => ! $active,
        'text-primary-600 shadow bg-white' => $active,
    ]) }}
>
    {{ $slot }}
</{{ $tag }}>