@props([
    'title' => 'Page Title'
])

<main class="bg-gray-200 flex-1 p-6">
    <div class="flex items-center justify-between mb-8">
        <h1 class="text-4xl text-black">{{ $title }}</h1>
    </div>
    {{ $slot }}
</main>