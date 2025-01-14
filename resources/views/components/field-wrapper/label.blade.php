@props([
    'error' => false,
    'prefix' => null,
    'required' => false,
    'suffix' => null,
])

<label {{ $attributes->class(['inline-flex items-center space-x-3 rtl:space-x-reverse', 'filament-forms-field-wrapper-label']) }}>
    {{ $prefix }}

    <span @class([
        'text-sm font-medium leading-4 tracking-wider',
        'text-gray-700' => ! $error,
        'text-danger-700' => $error,
    ])>
        {{ $slot }}

        @if ($required)
            <sup class="font-medium text-danger-700">*</sup>
        @endif
    </span>

    {{ $suffix }}
</label>
