<x-dashboard-layout>
    <x-dashboard.main>
        {{-- Client logo --}}
        @if($client->logo_path)
            <img src="/storage/{{ $client->logo_path }}" alt="{{ $client->name }}" class="h-20 w-20 rounded-lg mb-6">
        @endif

        {{-- Client actions --}}
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-4xl text-black">{{ $client->name }}</h1>

            <div class="flex items-center gap-2">
                <form action="{{ route('dashboard.clients.destroy', $client->id) }}" method="POST">
                    @method('DELETE')
                    <x-inputs.submit title="Delete client"  />
                </form>

                <x-dashboard.buttons.primary-btn title="Edit client"
                    url="{{ route('dashboard.clients.edit', $client->id) }}" />
            </div>
        </div>

    </x-dashboard.main>
</x-dashboard-layout>