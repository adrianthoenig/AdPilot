@props([
    'label' => null,
    'gap' => 6,
    'error' => false,
    'radioName' => ''
])

<div
    class="p-6 flex flex-col gap-{{ $gap }} border rounded-xl border-gray-300 @error($radioName) border-2 border-red-500 @enderror">
    @if($label)
        <h3 class="text-xl">{{ $label }}</h3>
    @endif
    {{ $slot }}
</div>
@error($radioName)
    <p class="text-sm text-red-500 -mt-4">You must select at least one</p>
@enderror