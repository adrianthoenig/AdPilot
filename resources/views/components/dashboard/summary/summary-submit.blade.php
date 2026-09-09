@props([
    'title' => 'Create new',
    'message' => 'You can make changes at any time'
])

<div class="p-6 rounded-xl bg-gray-100 flex flex-col gap-6">
    <h4 class="text-xl">{{ $title }}</h4>
    <p>{{ $message }}</p>
    {{ $slot }}
</div>