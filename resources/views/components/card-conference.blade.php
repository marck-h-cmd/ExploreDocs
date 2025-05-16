@props([
'date',
'month',
'title',
'location',
'registerUrl' => '#',
'moreUrl' => '#',
'registerBtnText' => 'Registrar',
'moreBtnText' => 'Más info',
'registerBtnIcon' => null,
'moreBtnIcon' => null,
])

<div class="w-full max-w-md px-2 h-full">
    <div class="bg-white rounded-2xl shadow hover:shadow-lg transition-all duration-300 flex flex-col h-full">

        <div class="p-4 flex flex-col flex-grow">
            <div class="flex items-center gap-4 mb-4">
                <div class="text-center">
                    <div class="text-2xl font-extrabold text-blue-600 leading-tight">{{ $date }}</div>
                    <div class="uppercase text-xs text-gray-500 tracking-wide">{{ $month }}</div>
                </div>
                <div>
                    <h5 class="text-base font-semibold text-gray-800 leading-tight">{{ $title }}</h5>
                    <p class="text-sm text-gray-600 mt-1">{{ $location }}</p>
                </div>
            </div>

            {{-- Flex-1 no es necesario aquí; usamos mt-auto en el footer --}}
            <div class="mt-auto pt-4 flex gap-2">
                <a href="{{ $registerUrl }}"
                    class="flex-1 inline-flex items-center justify-center px-3 py-1.5 text-sm font-medium text-white bg-blue-500 rounded-md hover:bg-blue-600 transition">
                    {!! $registerBtnIcon ?? '' !!} {{ $registerBtnText }}
                </a>
                <a href="{{ $moreUrl }}"
                    class="flex-1 inline-flex items-center justify-center px-3 py-1.5 text-sm font-medium text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 transition">
                    {!! $moreBtnIcon ?? '' !!} {{ $moreBtnText }}
                </a>
            </div>
        </div>

    </div>
</div>