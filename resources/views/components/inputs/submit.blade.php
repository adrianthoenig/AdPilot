@props([
    'title' => 'Add new'
])

<button 
    type="submit"
    class="cursor-pointer flex items-center justify-center gap-2 px-4 py-3 bg-gray-700 hover:bg-gray-600 rounded-lg text-white flex items-center gap-2"
    >
{{ $title }}
</button>