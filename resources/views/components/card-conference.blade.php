@props([
'date' => '',
'month' => '',
'title' => '',
'location' => '',
'registerUrl' => '#',
'moreUrl' => '#',
'registerBtnText' => 'Registrar',
'moreBtnText' => 'Más info',
'registerBtnColor' => 'btn-outline-primary',
'moreBtnColor' => 'btn-outline-secondary',
'registerBtnIcon' => null,
'moreBtnIcon' => null,
'cardClass' => 'shadow-sm h-100',
'footerClass' => 'bg-transparent border-top-0 text-center',
'dateSize' => 'fs-4',
'dateColor' => 'text-primary'
])

<div class="col">
    <div class="card {{ $cardClass }} rounded-4 overflow-hidden">
        <div class="card-body">
            <div class="d-flex align-items-center mb-3">
                @if($date || $month)
                <div class="text-center me-3">
                    @if($date)
                    <div class="fw-bold {{ $dateSize }} {{ $dateColor }}">{{ $date }}</div>
                    @endif
                    @if($month)
                    <div class="text-uppercase small text-muted">{{ $month }}</div>
                    @endif
                </div>
                @endif

                <div>
                    @if($title)
                    <h5 class="card-title mb-1">{{ $title }}</h5>
                    @endif
                    @if($location)
                    <p class="mb-0 small">{{ $location }}</p>
                    @endif
                </div>
            </div>
        </div>

        <div class="card-footer {{ $footerClass }}">
            <div class="d-flex justify-content-center gap-2">
                <a href="{{ $registerUrl }}" class="btn {{ $registerBtnColor }} btn-sm">
                    @if($registerBtnIcon)
                    <i class="{{ $registerBtnIcon }} me-1"></i>
                    @endif
                    {{ $registerBtnText }}
                </a>
                <a href="{{ $moreUrl }}" class="btn {{ $moreBtnColor }} btn-sm">
                    @if($moreBtnIcon)
                    <i class="{{ $moreBtnIcon }} me-1"></i>
                    @endif
                    {{ $moreBtnText }}
                </a>
            </div>
        </div>
    </div>
</div>