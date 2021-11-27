@php
    /**
     * @var Closure $getLabel
     */
    $label = $getLabel();
@endphp
<div
    {!! $getId() ? "id=\"{$getId()}\"" : null !!}
    {{ $attributes->merge($getExtraAttributes())->class(['p-6 bg-white shadow rounded-md', 'filament-forms-card-component']) }}
>
    @if($label && !$isLabelHidden())
        <div class="mb-4 text-xl font-medium text-gray-500">
            {!! $getLabel() !!}
        </div>
    @endif

    {{ $getChildComponentContainer() }}
</div>
