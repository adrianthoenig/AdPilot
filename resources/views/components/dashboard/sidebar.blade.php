<nav class="p-6 bg-gray-200 flex flex-col justify-between h-screen">
    {{-- Top Groups --}}
    <div class="flex flex-col gap-8">
        <x-dashboard.sidebar-group>
            <x-dashboard.sidebar-button icon="briefcase"/>
            <x-dashboard.sidebar-button icon="user-group" url="{{ route('dashboard.client.index') }}" />
            <x-dashboard.sidebar-button icon="user-plus" />
        </x-dashboard.sidebar-group>

        <x-dashboard.sidebar-group>
            <x-dashboard.sidebar-button icon="chart-simple" />
            <x-dashboard.sidebar-button icon="wallet" />
            <x-dashboard.sidebar-button icon="note-sticky" />
        </x-dashboard.sidebar-group>
    </div>

    {{-- Bottom Group --}}
    <x-dashboard.sidebar-group>
        <x-dashboard.sidebar-button icon="gear" />
        <x-dashboard.sidebar-button icon="arrow-right-from-bracket" />
    </x-dashboard.sidebar-group>
</nav>