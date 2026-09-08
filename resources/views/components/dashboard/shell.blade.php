@props([
    'title' => 'All clients',
])

<div class="flex items-center justify-between mb-8">
    <h1 class="text-4xl text-black">{{ $title }}</h1>

    <div class="flex items-center gap-2">
        {{ $slot }}
    </div>
</div>