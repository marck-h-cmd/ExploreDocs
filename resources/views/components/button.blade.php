@props([
'href' => '',
'text' => '',
'color' => 'btn-primary',
'icon' => '',
'class' => '',
'iconRight' => '', // opcional para un segundo ícono
])

@if ($href)
<a href="{{ $href }}" class="btn {{ $color }} d-inline-flex align-items-center justify-center {{ $class }}">
    @if ($icon)
    <i class="{{ $icon }}{{ $text ? ' me-2' : '' }}"></i>
    @endif
    @if ($text)
    {{ $text }}
    @endif
    @if ($iconRight)
    <i class="{{ $iconRight }}{{ $text ? ' ms-2' : '' }}"></i>
    @endif
</a>
@else
<button type="button" class="btn {{ $color }} d-inline-flex align-items-center justify-center {{ $class }}">
    @if ($icon)
    <i class="{{ $icon }}{{ $text ? ' me-2' : '' }}"></i>
    @endif
    @if ($text)
    {{ $text }}
    @endif
    @if ($iconRight)
    <i class="{{ $iconRight }}{{ $text ? ' ms-2' : '' }}"></i>
    @endif
</button>
@endif