@props([
    'title' => 'Add new'
])

<button 
    type="submit"
    class="cursor-pointer flex items-center justify-center gap-2 px-4 py-3 bg-primary-400 hover:bg-primary-500 transition-colors rounded-lg text-white flex items-center gap-2"
    >
{{ $title }}
</button>