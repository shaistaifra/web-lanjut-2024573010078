@props([
    'title' => '',
    'description' => '',
    'icon' => '⭐',
    'badge' => null,
    'theme' => 'light',
])

<div class="card feature-card h-100 {{ $theme === 'dark' ? 'bg-secondary text-white' : 'bg-light text-dark' }}">
    <div class="card-body">
        <div class="d-flex align-items-center mb-3">
            <span class="fs-2 me-3">{{ $icon }}</span>
            <h5 class="card-title mb-0">{{ $title }}</h5>
        </div>
        <p class="card-text">{{ $description }}</p>
        @if($badge)
            <span class="badge {{ $theme === 'dark' ? 'bg-light text-dark' : 'bg-dark text-white' }}">{{ $badge }}</span>
        @endif
    </div>
</div>