@props([
    'title' => 'Details'
])

<div class="p-6 rounded-xl bg-gray-100 flex flex-col gap-6">
    <h4 class="text-xl">{{ $title }}</h4>
    <div class="flex flex-col gap-4 w-90 text-ellipsis overflow-x-hidden">
        {{ $slot }}
    </div>
</div>