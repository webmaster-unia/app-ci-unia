@props([
    'route' => null,
    'routeIs' => null
])

<li class="nav-item">
    <a
        href="{{ $route }}"
        class="nav-link menu-link {{ request()->routeIs($routeIs) ? 'active bg-primary' : '' }}"
    >
        <span class="ms-4 ps-1">-</span>
        <span class="ms-3">{{ $slot }}</span>
    </a>
</li>
