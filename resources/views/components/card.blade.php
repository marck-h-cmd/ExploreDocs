@props([
'img' => '',
'alt' => '',
'title' => '',
'description' => '',
'href' => '#',
'btnText' => 'Ver perfil',
'btnColor' => 'btn-primary',
'btnIcon' => null,
'cardClass' => 'h-100',
'footerClass' => 'bg-transparent border-top-0 text-center'
])

<div class="col">
    <div class="card shadow-sm rounded-4 overflow-hidden {{ $cardClass }}">
        @if($img)
        <img src="{{ $img }}" class="card-img-top object-fit-cover w-100" style="height: 200px; object-fit: cover; object-position: center;" alt="{{ $alt }}">
        @endif

        <div class="card-body px-4 py-3">
            @if($title)
            <h5 class="card-title  mb-2 fw-semibold">{{ $title }}</h5>
            @endif

            @if($description)
            <p class="card-text">{{ $description }}</p>
            @endif
        </div>

        @if($href || $btnIcon || $btnText)
        <div class="card-footer {{ $footerClass }}">
            <a href="{{ $href }}" class="btn {{ $btnColor }} transition-all">
                @if($btnIcon)
                <i class="{{ $btnIcon }} me-2"></i>
                @endif
                {{ $btnText }}
            </a>
        </div>
        @endif
    </div>
</div>