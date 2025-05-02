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
    <div class="card {{ $cardClass }} rounded-xl overflow-hidden transition-shadow hover:shadow-md">
        <div class="card-body">
            <div class="d-flex align-items-center gap-3 mb-3">
                @if($date || $month)
                <div class="text-center me-2">
                    @if($date)
                    <div class="fw-bold {{ $dateSize }} {{ $dateColor }} tracking-wide">{{ $date }}</div>
                    @endif
                    @if($month)
                    <div class="text-uppercase small text-muted">{{ $month }}</div>
                    @endif
                </div>
                @endif

                <div>
                    @if($title)
                    <h5 class="card-title mb-1 font-semibold text-lg">{{ $title }}</h5>
                    @endif
                    @if($location)
                    <p class="mb-0 small text-gray-700">{{ $location }}</p>
                    @endif
                </div>
            </div>
        </div>

        <div class="card-footer {{ $footerClass }}">
            <div class="d-flex justify-content-center gap-2">
                <x-button
                    :href="$registerUrl"
                    :text="$registerBtnText"
                    :color="$registerBtnColor"
                    :icon="$registerBtnIcon"
                    class="btn-sm hover:scale-105 transition" />
                <x-button
                    :href="$moreUrl"
                    :text="$moreBtnText"
                    :color="$moreBtnColor"
                    :icon="$moreBtnIcon"
                    class="btn-sm hover:scale-105 transition" />
            </div>
        </div>
    </div>
</div>