@props([
'href' => '',
'text' => '',
'color' => '',
'icon' => '',
'class' => '',
'iconRight' => '',
])

@php
$tailwindBase = 'inline-flex items-center justify-center gap-2 px-4 py-2 rounded-xl shadow-sm transition duration-200 hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-offset-2';
@endphp

@if ($href)
<a href="{{ $href }}" class="{{ $color }} {{ $tailwindBase }} {{ $class }}">
    @if ($icon)
    <i class="{{ $icon }}{{ $text ? ' mr-2' : '' }}"></i>
    @endif
    @if ($text)
    {{ $text }}
    @endif
    @if ($iconRight)
    <i class="{{ $iconRight }}{{ $text ? ' ml-2' : '' }}"></i>
    @endif
</a>
@else
<button type="button" class="{{ $color }} {{ $tailwindBase }} {{ $class }}">
    @if ($icon)
    <i class="{{ $icon }}{{ $text ? ' mr-2' : '' }}"></i>
    @endif
    @if ($text)
    {{ $text }}
    @endif
    @if ($iconRight)
    <i class="{{ $iconRight }}{{ $text ? ' ml-2' : '' }}"></i>
    @endif
</button>
@endif