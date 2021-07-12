{{--wind--}}
@include('netatmo-weather-tile::rows.title', ['title' => '💨 ' . $module['module_name'], 'reachable' => $module['reachable']])

<li class="grid grid-cols-1-auto py-1">
    <span class="truncate"
          title=""
    >
        Wind strength
    </span>
    <span>
        <span class="font-bold tabular-nums flex items-center">
            {{ $module['dashboard_data']['WindStrength'] }} km/h
            <span class="flex items-center text-xs">
                (<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                </svg> {{ $module['dashboard_data']['max_wind_str'] }})
            </span>
        </span>
    </span>
</li>
<li class="grid grid-cols-1-auto py-1">
    <span class="truncate"
          title=""
    >
        Wind Angle
    </span>
    <span>
        <span class="font-bold tabular-nums flex items-center">
            {{ $module['dashboard_data']['WindAngle'] }} °
            <span class="flex items-center text-xs">
                (<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                </svg> {{ $module['dashboard_data']['max_wind_angle'] }})
            </span>
        </span>
    </span>
</li>
@include('netatmo-weather-tile::rows.updated', ['data' => $module['dashboard_data']['time_utc']])
