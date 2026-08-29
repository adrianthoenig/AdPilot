@props([
    'label' => null
])

<div class="p-6 flex flex-col gap-6 border rounded-xl border-gray-300">
    @if($label)
    <h3 class="text-xl">{{ $label }}</h3>
    @endif
    {{ $slot }}
</div>