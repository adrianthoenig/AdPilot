<nav class="p-6 bg-gray-200">
    {{-- Top Groups --}}
    <div class="sticky top-4 gap-12 flex flex-col">
        <div class="flex flex-col gap-8">
            <x-dashboard.sidebar.sidebar-group>
                <x-dashboard.sidebar.sidebar-button icon="briefcase" />
                <x-dashboard.sidebar.sidebar-button icon="user-group" url="{{ route('dashboard.clients.index') }}" />
                <x-dashboard.sidebar.sidebar-button icon="user-plus" url="{{ route('dashboard.clients.create') }}" />
            </x-dashboard.sidebar.sidebar-group>

            <x-dashboard.sidebar.sidebar-group>
                <x-dashboard.sidebar.sidebar-button icon="chart-simple" />
                <x-dashboard.sidebar.sidebar-button icon="wallet" />
                <x-dashboard.sidebar.sidebar-button icon="note-sticky" />
            </x-dashboard.sidebar.sidebar-group>
        </div>

        {{-- Bottom Group --}}
        <x-dashboard.sidebar.sidebar-group>
            <x-dashboard.sidebar.sidebar-button icon="gear" />
            <x-dashboard.sidebar.sidebar-button icon="arrow-right-from-bracket" />
        </x-dashboard.sidebar.sidebar-group>
    </div>
</nav>