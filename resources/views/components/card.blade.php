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
        <img src="{{ $img }}" class="card-img-top object-fit-cover" style="height: 200px;" alt="{{ $alt }}">
        @endif

        <div class="card-body">
            @if($title)
            <h5 class="card-title">{{ $title }}</h5>
            @endif

            @if($description)
            <p class="card-text">{{ $description }}</p>
            @endif
        </div>

        @if($href || $btnIcon || $btnText)
        <div class="card-footer {{ $footerClass }}">
            <a href="{{ $href }}" class="btn {{ $btnColor }}">
                @if($btnIcon)
                <i class="{{ $btnIcon }} me-2"></i>
                @endif
                {{ $btnText }}
            </a>
        </div>
        @endif
    </div>
</div>