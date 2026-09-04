@props([
    'summaryTitle' => 'Summary Title',
    'publishTitle' => 'Publish it',
    'publishMessage' => 'You can make changes at any time',
    'fields' => []
])

@vite('resources/js/modules/clientSummary.js')

<div class="bg-white p-6 rounded-xl flex flex-col gap-6 sticky top-4 overflow-hidden">
    <div class="p-6 rounded-xl bg-gray-100 flex flex-col gap-6">
        <h4 class="text-xl">{{ $summaryTitle }}</h4>
        <div class="flex flex-col gap-4 w-90 text-ellipsis overflow-hidden">

            {{-- Company name --}}
            <div class="flex items-center justify-between gap-25">
                <p class="text-gray-600 whitespace-nowrap">Company name</p>
                <p id="company-name-value" class=" whitespace-nowrap overflow-x-scroll">
                    <span class="text-gray-400 animate-pulse">
                        Pending
                    </span>
                </p>
            </div>

            {{-- Client Status --}}
            <div class="flex items-center justify-between gap-25">
                <p class="text-gray-600 whitespace-nowrap">Client status</p>
                <p id="client-status-value" class="text-ellipsis">
                    <span class="text-gray-400 animate-pulse">Pending</span>
                </p>
            </div>

            {{-- Total fields (DYNAMIC) --}}
            <div class="flex items-center justify-between gap-25">
                <p class="text-gray-600 whitespace-nowrap">Total fields</p>
                <p>
                    <span id="total-fields-fill" class="text-ellipsis">0</span> / <span id="total-fields-max">13</span>
                </p>
            </div>

            {{-- Required (DYNAMIC) --}}
            <div class="flex items-center justify-between gap-25">
                <p class="text-gray-600 whitespace-nowrap">Required fields</p>
                <p>
                    <span id="required-fields-fill" class="text-red-500">0</span> / <span id="required-fields-max">4</span>
                </p>
            </div>

            {{-- Status --}}
            <div class="flex items-center justify-between gap-25">
                <p class="text-gray-600 whitespace-nowrap">Status</p>
                <p id="status-value">
                    <span class="text-red-500 animate-pulse">Not ready</span>
                </p>
            </div>
        </div>
    </div>
    <div class="p-6 rounded-xl bg-gray-100 flex flex-col gap-6">
        <h4 class="text-xl">{{ $publishTitle }}</h4>
        <p>{{ $publishMessage }}</p>
        <x-inputs.submit />
    </div>
</div>