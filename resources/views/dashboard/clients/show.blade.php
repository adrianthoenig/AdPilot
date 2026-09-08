<x-dashboard-layout>
    <x-dashboard.main>
        {{-- Client logo --}}
        @if($client->logo_path)
            <img src="/storage/{{ $client->logo_path }}" alt="{{ $client->name }}" class="h-20 w-20 rounded-lg mb-6">
        @endif

        {{-- Client actions --}}
        <x-dashboard.shell title="{{ $client->name }}">
            <form action="{{ route('dashboard.clients.destroy', $client->id) }}" method="POST">
                @method('DELETE')
                <x-inputs.submit title="Delete client" />
            </form>

            <x-dashboard.buttons.primary-btn title="Edit client"
                url="{{ route('dashboard.clients.edit', $client->id) }}" />
        </x-dashboard.shell>

    </x-dashboard.main>
</x-dashboard-layout>