@props([
    'icon' => null
])

<li {{ $attributes->merge(['class' => 'menu-title']) }}>
    @if ($icon)
        <i class="{{ $icon }}"></i>
    @endif
    <span>{{ $slot }}</span>
</li>
