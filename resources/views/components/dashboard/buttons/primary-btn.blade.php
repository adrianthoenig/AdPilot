@props([
    'url' => '/dashboard',
    'title' => 'Add new client'
])

<a href="{{ $url }}" class="block px-4 py-3 bg-primary-400 hover:bg-primary-500 rounded-lg text-white flex items-center gap-2">
    {{ $title }}
</a>