@props([
    'url' => '/dashboard', 
    'icon' => 'power-off',
    'active' => false
])

<a 
    href="{{ $url }}" 
    class="cursor-pointer block flex items-center justify-center {{$active ? 'bg-gray-100' : 'bg-white'}} hover:bg-gray-50  rounded-full h-12 w-12"
    >
    <i class="fas fa-{{ $icon }}"></i>
</a>