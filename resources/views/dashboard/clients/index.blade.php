<x-dashboard-layout>
    <x-dashboard.main title="All clients">
        <x-dashboard.clients.shell />
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
            @forelse($clients as $client)
            <x-client-card
                :client="$client"
            />
            @empty
            <p>No clients!</p>
            @endforelse
        </div>
    </x-dashboard.main>
</x-dashboard-layout>