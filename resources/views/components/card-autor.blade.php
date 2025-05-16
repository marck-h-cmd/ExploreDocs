@props([
'name',
'country' => '',
'avatar' => '',
'description' => '',
'showFollow' => true,
'moreUrl' => '',
])

<div class="w-full max-w-md h-full">
    <div class="h-full bg-white rounded-2xl overflow-hidden flex flex-col p-6 shadow hover:shadow-lg transition-all duration-300">

        {{-- Avatar --}}
        @if ($avatar)
        <img src="{{ $avatar }}" alt="{{ $name }}"
            class="rounded-full mb-4 border-4 border-blue-500 w-24 h-24 object-cover mx-auto">
        @else
        <div class="rounded-full bg-gray-400 mb-4 flex items-center justify-center text-white w-24 h-24 text-4xl mx-auto">
            <i class="bi bi-person-circle"></i>
        </div>
        @endif

        {{-- Contenido central crece para empujar el footer abajo --}}
        <div class="flex-1 text-center">
            <h5 class="text-xl font-semibold mb-1">{{ $name }}</h5>
            @if ($country)
            <small class="text-gray-500 mb-2">({{ $country }})</small>
            @endif
            @if ($description)
            <p class="text-gray-700 text-sm">{{ $description }}</p>
            @endif
        </div>

        {{-- Footer siempre pegado abajo --}}
        <div class="mt-4 text-center">
            @if ($showFollow)
            <x-button :text="'Seguir'" color=""
                class="text-green-800 text-sm hover:scale-105 transition mb-2" />
            @endif

            @if ($moreUrl)
            <a href="{{ $moreUrl }}"
                class="text-blue-600 text-sm font-semibold hover:underline tracking-wide block">
                MÁS DE {{ strtoupper($name) }} <i class="bi bi-chevron-right"></i>
            </a>
            @endif
        </div>
    </div>
</div>