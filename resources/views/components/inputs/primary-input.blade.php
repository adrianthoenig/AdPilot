@props([
    'title' => 'Add new client',
    'type' => 'text'
])

<input type="{{ $type }}" value="{{ $title }}" class="block px-4 py-3 bg-gray-700 hover:bg-gray-600 rounded-lg text-white flex items-center gap-2" />