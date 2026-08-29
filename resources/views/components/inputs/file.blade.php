@props([
    'id' => '',
    'name' => '',
    'label' => null,
    'required' => false
])

<div class="flex flex-col gap-2">
    @if($label)
    <label class="text-base" for="{{ $id }}">{{ $label }}{{ $required ? '*' : '' }}</label>
    @endif
    <input 
        type="file" 
        id="{{ $id }}" 
        name="{{ $name }}" 
        class="px-2 py-4 rounded-lg border border-gray-300 focus:outline-none"
        {{ $required ? 'required' : '' }}
    />
</div>