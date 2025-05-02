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
    <div class="card shadow-sm rounded-xl overflow-hidden transition hover:shadow-md {{ $cardClass }}">
        @if($img)
        <img src="{{ $img }}" class="card-img-top w-100" style="height: 200px; object-fit: cover; object-position: center;" alt="{{ $alt }}">
        @endif

        <div class="card-body px-4 py-3">
            @if($title)
            <h5 class="card-title mb-2 font-semibold text-lg">{{ $title }}</h5>
            @endif

            @if($description)
            <p class="card-text text-gray-700">{{ $description }}</p>
            @endif
        </div>

        @if($href || $btnIcon || $btnText)
        <div class="card-footer {{ $footerClass }}">
            <x-button
                :href="$href"
                :text="$btnText"
                :color="$btnColor"
                :icon="$btnIcon"
                class="transition hover:scale-105" />
        </div>
        @endif
    </div>
</div>