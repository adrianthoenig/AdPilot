@props([
    'id' => '',
    'title' => 'Client status',
    'status' => 'Pending',
])

<div class="flex items-center justify-between gap-25">
    <p class="text-gray-600 whitespace-nowrap">{{ $title }}</p>
    <p id="{{ $id }}" class="text-ellipsis">
        <span class="text-gray-400 animate-pulse">{{ $status }}</span>
    </p>
</div>