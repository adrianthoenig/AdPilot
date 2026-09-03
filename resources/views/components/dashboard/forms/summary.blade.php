@props([
    'summaryTitle' => 'Summary Title',
    'publishTitle' => 'Publish it',
    'publishMessage' => 'You can make changes at any time',
    'fields' => []
])

@vite('resources/js/modules/clientSummary.js')

<div class="bg-white p-6 rounded-xl flex flex-col gap-6 sticky top-4">
    <div class="p-6 rounded-xl bg-gray-100 flex flex-col gap-6">
        <h4 class="text-xl">{{ $summaryTitle }}</h4>
        <div class="flex flex-col gap-4">

            {{-- Company name --}}
            <div class="flex items-center justify-between gap-25">
                <p class="text-gray-600">Company name</p>
                <p>Value</p>
            </div>

            {{-- Client Status --}}
            <div class="flex items-center justify-between gap-25">
                <p class="text-gray-600">Client status</p>
                <p>Onboarding</p>
            </div>

            {{-- Total fields (DYNAMIC) --}}
            <div class="flex items-center justify-between gap-25">
                <p class="text-gray-600">Total fields</p>
                <p>13 / 13</p>
            </div>

            {{-- Required (DYNAMIC) --}}
            <div class="flex items-center justify-between gap-25">
                <p class="text-gray-600">Required fields</p>
                <p>4/4</p>
            </div>

            {{-- Status --}}
            <div class="flex items-center justify-between gap-25">
                <p class="text-gray-600">Status</p>
                <p>Ready</p>
            </div>
        </div>
    </div>
    <div class="p-6 rounded-xl bg-gray-100 flex flex-col gap-6">
        <h4 class="text-xl">{{ $publishTitle }}</h4>
        <p>{{ $publishMessage }}</p>
        <x-inputs.submit />
    </div>
</div>