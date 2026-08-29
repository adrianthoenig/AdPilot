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
        class="px-2 py-4 rounded-lg border border-gray-300 focus:outline-none" {{ $required ? 'required' : '' }}>
        @foreach($options as $id => $value)
            <option id="{{ $id }}">{{ $value }}</option>
        @endforeach
    </select>
</div>