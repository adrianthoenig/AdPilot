@props([
    'label' => null,
    'gap' => 6,
    'error' => false
])

<div
    class="p-6 flex flex-col gap-{{ $gap }} border rounded-xl border-gray-300 {{ $error ? 'border-2 border-red-500' : '' }}">
    @if($label)
        <h3 class="text-xl">{{ $label }}</h3>
    @endif
    {{ $slot }}
</div>
@if($error)
    <p class="text-sm text-red-500 -mt-4">You must select at least one</p>
@endif