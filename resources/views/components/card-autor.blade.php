@props([
'name',
'country' => '',
'avatar' => '',
'description' => '',
'showFollow' => true,
'moreUrl' => '',
])

<div class="col">
    <div class="card h-100 shadow-sm rounded-xl overflow-hidden">
        <div class="card-body text-center d-flex flex-column align-items-center gap-2 p-4">
            @if ($avatar)
            <img src="{{ $avatar }}" alt="{{ $name }}"
                class="rounded-circle mb-3 border border-primary"
                style="width: 80px; height: 80px; object-fit: cover;">
            @else
            <div class="rounded-circle bg-secondary mb-3 d-flex align-items-center justify-content-center text-white"
                style="width: 80px; height: 80px; font-size: 2rem;">
                <i class="bi bi-person-circle"></i>
            </div>
            @endif

            <h5 class="card-title mb-1 font-semibold text-lg">{{ $name }}</h5>

            @if ($country)
            <small class="text-muted mb-1 tracking-wide">({{ $country }})</small>
            @endif

            @if ($description)
            <p class="card-text text-center text-sm text-gray-700">{{ $description }}</p>
            @endif

            @if ($showFollow)
            <x-button :text="'Seguir'" color="btn-outline-success" class="btn-sm mt-2 hover:scale-105 transition" />
            @endif
        </div>

        @if ($moreUrl)
        <div class="card-footer bg-transparent border-0 text-center">
            <a href="{{ $moreUrl }}"
                class="text-primary text-decoration-none text-sm fw-semibold hover:underline tracking-wide">
                MÁS DE {{ strtoupper($name) }} <i class="bi bi-chevron-right"></i>
            </a>
        </div>
        @endif
    </div>
</div>