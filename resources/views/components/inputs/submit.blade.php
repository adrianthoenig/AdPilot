@props([
    'title' => 'Add new',
    'disabled' => false,
    'id' => ''
])

@if($disabled)
<button 
    type="submit"
    disabled
    id="{{ $id }}"
    class="flex items-center justify-center gap-2 px-4 py-3 bg-primary-200 transition-colors rounded-lg text-white flex items-center gap-2"
    >
{{ $title }}
</button>
@else
<button 
    type="submit"
    id="{{ $id }}"
    class="cursor-pointer flex items-center justify-center gap-2 px-4 py-3 bg-primary-400 hover:bg-primary-500 transition-colors rounded-lg text-white flex items-center gap-2"
    >
{{ $title }}
</button>
@endif