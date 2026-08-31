@props([
    'id' => '',
    'name' => '',
    'value' => '',
    'label' => null,
    'required' => false,
    'options' => []
])

<div class="flex flex-col gap-2">
    @if($label)
        <label class="text-base" for="{{ $id }}">{{ $label }}{{ $required ? '*' : '' }}</label>
    @endif
    <select id="{{ $id }}" name="{{ $name }}" value="{{ $value }}"
        class="px-2 py-4 rounded-lg border border-gray-300 focus:outline-none @error($name) border-2 border-red-500 @enderror" 
        {{ $required ? 'required' : '' }}>
        @foreach($options as $id => $value)
            <option {{ old($name) == $id ? 'selected' : '' }} id="{{ $id }}" value="{{ $id }}">{{ $value }}</option>
        @endforeach
    </select>
    @error($name)
    <p class="text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>