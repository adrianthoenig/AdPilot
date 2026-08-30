<x-dashboard-layout>
    <x-dashboard.main title="All clients">
        <x-dashboard.buttons.primary-btn title="Add new client" url="{{ route('dashboard.clients.create') }}" />
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
            @forelse($clients as $client)
            <x-client-card
                status="{{ $client->status }}"
                clientName="{{ $client->name }}"
                monthlyBudget="{{ $client->monthly_budget }}"
                currency="{{ $client->currency }}"
                joinedDate="{{ $client->created_at }}"
            />
            @empty
            <p>No clients!</p>
            @endforelse
        </div>
    </x-dashboard.main>
</x-dashboard-layout>