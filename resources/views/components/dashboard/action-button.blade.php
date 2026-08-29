@props([
    'url' => '/dashboard',
    'icon' => 'eye'
])

<a href="{{ $url }}" class="bg-gray-100 hover:bg-gray-200 rounded-lg px-4 py-3">
    <i class="fas fa-{{ $icon }}"></i>
</a>