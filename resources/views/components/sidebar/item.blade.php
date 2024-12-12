@props([
    'name' => null,
    'route' => null,
    'routeIs' => null,
    'icon' => null
])

<li class="nav-item">
    <a
        @if ($route)
            href="{{ $route }}"
            class="nav-link menu-link {{ request()->routeIs($routeIs) ? 'active bg-primary' : '' }}"
        @else
            href="#sidebarOptions"
            class="nav-link menu-link {{ request()->routeIs($routeIs) ? 'active' : '' }}"
            data-bs-toggle="collapse"
            role="button"
            aria-expanded="false"
            aria-controls="sidebarOptions"
        @endif
    >
        @if ($icon)
            <i class="{{ $icon }}"></i>
        @endif
        <span>{{ $name }}</span>
    </a>
    @if (!$route)
        <div
            class="collapse menu-dropdown {{ request()->routeIs($routeIs) ? 'show' : '' }}"
            id="sidebarOptions"
        >
            <ul class="nav flex-column">
                {{ $slot }}
            </ul>
        </div>
    @endif
</li>
