@props([
'href' => '',
'text' => 'Click',
'color' => 'btn-primary',
'icon' => '',
'class' => '',
])

@if ($href)
<a href="{{ $href }}" class="btn {{ $color }} d-inline-flex align-items-center gap-2 {{ $class }}">
    @if ($icon)
    <i class="{{ $icon }} me-2"></i>
    @endif
    {{ $text }}
</a>
@else
<button type="button" class="btn {{ $color }} d-inline-flex align-items-center gap-2 {{ $class }}">
    @if ($icon)
    <i class="{{ $icon }} me-2"></i>
    @endif
    {{ $text }}
</button>
@endif