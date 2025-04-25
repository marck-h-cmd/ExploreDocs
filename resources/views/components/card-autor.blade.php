@props([
'name',
'country' => '',
'avatar' => '',
'description' => '',
'showFollow' => true,
'moreUrl' => '',
])
<div class="col">
    <div class="card h-100 shadow-sm">
        <div class="card-body text-center d-flex flex-column align-items-center">
            @if ($avatar)
            <img src="{{ $avatar }}" alt="{{ $name }}" class="rounded-circle mb-3" style="width: 80px; height: 80px; object-fit: cover;">
            @else
            <div class="rounded-circle bg-secondary mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px; color: white; font-size: 24px;">
                <i class="bi bi-person-circle"></i>
            </div>
            @endif

            <h5 class="card-title mb-1">{{ $name }}</h5>
            @if ($country)
            <small class="text-muted mb-2">({{ $country }})</small>
            @endif

            @if ($description)
            <p class="card-text text-center small">{{ $description }}</p>
            @endif

            @if ($showFollow)
            <button class="btn btn-outline-success btn-sm mt-auto">Seguir</button>
            @endif
        </div>

        @if ($moreUrl)
        <div class="card-footer bg-transparent border-0 text-center">
            <a href="{{ $moreUrl }}" class="text-primary text-decoration-none small fw-semibold">
                MAS DE {{ strtoupper($name) }} <i class="bi bi-chevron-right"></i>
            </a>
        </div>
        @endif
    </div>
</div>