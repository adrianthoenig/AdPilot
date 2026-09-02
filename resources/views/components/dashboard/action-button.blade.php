@props([
    'url' => '/dashboard',
    'icon' => 'eye'
])

<a href="{{ $url }}" class="bg-primary-200 hover:bg-primary-300 transition-colors rounded-lg px-4 py-3">
    <i class="fas fa-{{ $icon }} text-primary-900"></i>
</a>