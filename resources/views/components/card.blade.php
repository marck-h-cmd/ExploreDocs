@props([
'img' => '',
'alt' => '',
'title' => '',
'description' => '',
'href' => '',
'btnText' => '',
'btnColor' => 'dark:focus:ring-yellow-900',
'btnIcon' => '',
])

<div class="w-full max-w-md h-full px-2">
    <div class="bg-white rounded-2xl shadow p-6 flex flex-col h-full transition-shadow hover:shadow-lg">

        <img src="{{ asset($img) }}" alt="{{ $alt }}"
            class="rounded mb-4 w-full h-48 object-cover">

        <h4 class="font-bold text-lg mb-2">{{ $title }}</h4>

        <p class="text-gray-900 flex-1 mb-4">{{ $description }}</p>

        <x-button
            :href="$href"
            :text="$btnText"
            :icon="$btnIcon"
            class="{{ $btnColor }} w-full" />

    </div>
</div>