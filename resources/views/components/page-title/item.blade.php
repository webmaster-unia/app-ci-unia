@props([
    'active' => false,
    'href' => null
])
<li
    {{ $attributes->merge(['class' => 'breadcrumb-item' . ($active ? ' active' : '')]) }}
>
    @if ($href)
        <a href="{{ $href }}">{{ $slot }}</a>
    @else
        {{ $slot }}
    @endif
</li>
