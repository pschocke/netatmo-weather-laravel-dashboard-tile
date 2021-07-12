@include('netatmo-weather-tile::rows.title', ['title' => '🏘 ' . $device['module_name'], 'reachable' => $device['reachable']])
@include('netatmo-weather-tile::rows.temperature', ['current' => $device['dashboard_data']['Temperature'], 'max' => $device['dashboard_data']['max_temp'], 'min' => $device['dashboard_data']['min_temp']])
@include('netatmo-weather-tile::rows.co2', ['data' => $device['dashboard_data']['CO2']])
<li class="grid grid-cols-1-auto py-1">
    <span class="truncate"
          title=""
    >
        Noise
    </span>
    <span>
        <span class="font-bold tabular-nums flex items-center">
            {{ $device['dashboard_data']['Noise'] }} db
        </span>
    </span>
</li>
@include('netatmo-weather-tile::rows.humidity', ['data' => $device['dashboard_data']['Humidity']])
@include('netatmo-weather-tile::rows.updated', ['data' => $device['dashboard_data']['time_utc']])

