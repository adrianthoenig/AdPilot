@props([
    'url' => '/dashboard',
    'icon' => 'eye',
    'type' => 'link'
])

@if($type === 'link')
<a href="{{ $url }}" class="bg-primary-200 hover:bg-primary-300 transition-colors rounded-lg px-4 py-3">
    <i class="fas fa-{{ $icon }} text-primary-900"></i>
</a>
@endif

@if($type === 'btn')
<button type="submit" class="cursor-pointer bg-primary-200 hover:bg-primary-300 transition-colors rounded-lg px-4 py-3">
    <i class="fas fa-{{ $icon }} text-primary-900"></i>
</button>
@endif