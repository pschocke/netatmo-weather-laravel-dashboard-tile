<x-dashboard-tile :position="$position" :refresh-interval="60">
    <div class="grid grid-rows-auto-1 gap-2 h-full">
        <div class="flex justify-center items-center h-10">
            <div class="text-3xl leading-none w-10">☁️</div>
            <div class="text-lg leading-none">Netatmo Weather</div>
        </div>
        <ul class="self-center divide-y-2">
            @forelse($devices as $device)
                @if(!is_array($showDevices) || in_array($device['module_name'], $showDevices))
                    @include('netatmo-weather-tile::namain', ['device' => $device])
                @endif
                @foreach($device['modules'] as $module)
                        @if(!is_array($showDevices) || in_array($module['module_name'], $showDevices))
                            @include('netatmo-weather-tile::' . $module['type'], ['module' => $module])
                        @endif
                @endforeach
            @empty
                <li class="grid grid-cols-1-auto py-1">
                    <span>
                        <span>Leider können keine Wetterdaten angezeigt werden.
                        </span>
                    </span>
                </li>
            @endforelse
        </ul>
    </div>
</x-dashboard-tile>
