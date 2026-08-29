<x-dashboard-layout>
    <x-dashboard.main title="All clients">
        <x-dashboard.buttons.primary-btn title="Add new client" url="{{ route('dashboard.clients.create') }}" />
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
            <x-dashboard.client-card />
            <x-dashboard.client-card />
            <x-dashboard.client-card />
        </div>
    </x-dashboard.main>
</x-dashboard-layout>