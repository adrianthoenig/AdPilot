@props([
    'id' => '',
    'name' => '',
    'placeholder' => '',
    'value' => '',
    'label' => null,
    'required' => false,
    'type' => 'text'
])

<div class="flex flex-col gap-2">
    @if($label)
    <label class="text-base" for="{{ $id }}">{{ $label }}{{ $required ? '*' : '' }}</label>
    @endif
    <input 
        type="{{ $type }}" 
        id="{{ $id }}" 
        name="{{ $name }}" 
        placeholder="{{ $placeholder }}" 
        value="{{ $value }}"
        class="px-2 py-4 rounded-lg border border-gray-300 focus:outline-none @error($name) border-2 border-red-500 @enderror"
        {{ $required ? 'required' : '' }}
    />
    @error($name)
    <p class="text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>