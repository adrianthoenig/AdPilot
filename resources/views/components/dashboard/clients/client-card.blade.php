@props([
    'client',
    'activeCampaigns' => 12,
])

<div class="bg-white p-6 rounded-xl flex flex-col gap-6">
    <div class="flex justify-between items-center">
        {{-- Chip (component) --}}
        <x-dashboard.chips.status-chip status="{{ $client->client_status }}" />

        <div class="flex items-center gap-2">
            <x-action-button url="{{ route('dashboard.clients.show', $client->id) }}" icon="eye" />
            <x-action-button url="/dashboard" icon="pencil" />
            <x-action-button url="/dashboard" icon="trash" />
        </div>
    </div>
    <div class="flex items-center gap-4 flex-1">
        @if($client->logo_path)
        <img src="/storage/{{ $client->logo_path }}" alt="{{ $client->name }}" class="h-12 w-12 rounded-lg">
        @endif
        <div class="flex-1 flex flex-col gap-1">
            <h2 class="text-2xl">{{ $client->name  }}</h2>
        </div>
    </div>

    <div class="h-[0.72px] w-full bg-gray-700"></div>

    <div class="flex flex-col gap-6 flex-1">
        <div class="flex flex-col gap-3">
            <div class="flex items-center gap-2">
                <i class="fas fa-chart-simple"></i>
                <p class="text-lg font-light">Active campaigns</p>
            </div>
            <h3 class="text-2xl">{{ $activeCampaigns }}</h3>
        </div>
        <div class="flex flex-col gap-3">
            <div class="flex items-center gap-2">
                <i class="fas fa-coins"></i>
                <p class="text-lg font-light">Monthly budget</p>
            </div>
            <h3 class="text-2xl">{{ formatCurrency($client->monthly_budget, $client->currency) }}</h3>
        </div>
    </div>

    <div class="h-[0.72px] w-full bg-gray-700"></div>

    <p class="text-lg font-light text-gray-400">Joined {{ friendlyDateFormat($client->created_at) }}</p>
</div>