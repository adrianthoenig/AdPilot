@props([
    'summaryTitle' => 'Summary Title',
    'publishTitle' => 'Publish it',
    'publishMessage' => 'You can make changes at any time',
    'fields' => []
])

<div class="bg-white p-6 rounded-xl flex flex-col gap-6 sticky top-4">
    <div class="p-6 rounded-xl bg-gray-100 flex flex-col gap-6">
        <h4 class="text-xl">{{ $summaryTitle }}</h4>
        <div class="flex flex-col gap-4">
            @foreach($fields as $name => $value)
            <div class="flex items-center justify-between gap-25">
                <p class="text-gray-600">{{ $name }}</p>
                <p>{{ $value }}</p>
            </div>
            @endforeach
        </div>
    </div>
    <div class="p-6 rounded-xl bg-gray-100 flex flex-col gap-6">
        <h4 class="text-xl">{{ $publishTitle }}</h4>
        <p>{{ $publishMessage }}</p>
        <x-inputs.submit />
    </div>
</div>