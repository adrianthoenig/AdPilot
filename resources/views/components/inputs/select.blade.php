@props([
    'id' => '',
    'name' => '',
    'value' => '',
    'label' => null,
    'required' => false,
    'options' => [],
    'default' => null
])

<div class="flex flex-col gap-2">
    @if($label)
        <label class="text-base" for="{{ $id }}">{{ $label }}{{ $required ? '*' : '' }}</label>
    @endif
    <select id="{{ $id }}" name="{{ $name }}" value="{{ $value }}"
        class="form__input px-2 py-4 rounded-lg border border-gray-300 focus:outline-none @error($name) border-2 border-red-500 @enderror" 
        {{ $required ? 'required' : '' }}>
        @if($default)
            <option disabled selected value="default" id="default">{{ $default }}</option>
        @endif
        @foreach($options as $id => $option)
            @if($option['selected'])
                <option selected id="{{ $id }}" value="{{ $id }}">{{ $option['value'] }}</option>
            @else
                <option id="{{ $id }}" value="{{ $id }}">{{ $option['value'] }}</option>
            @endif
        @endforeach
    </select>
    @error($name)
    <p class="text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>