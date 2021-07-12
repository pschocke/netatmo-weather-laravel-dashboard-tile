{{--Rain--}}
@include('netatmo-weather-tile::rows.title', ['title' => '☔️ ' . $module['module_name'], 'reachable' => $module['reachable']])

<li class="grid grid-cols-1-auto py-1">
    <span class="truncate"
          title=""
    >
        Current rain
    </span>
    <span>
        <span class="font-bold tabular-nums flex items-center">
            {{ $module['dashboard_data']['Rain'] }} mm
        </span>
    </span>
</li>

<li class="grid grid-cols-1-auto py-1">
    <span class="truncate"
          title=""
    >
        Rain last hour
    </span>
    <span>
        <span class="font-bold tabular-nums flex items-center">
            {{ $module['dashboard_data']['sum_rain_1'] }} mm
        </span>
    </span>
</li>

<li class="grid grid-cols-1-auto py-1">
    <span class="truncate"
          title=""
    >
        Rain last 24 hours
    </span>
    <span>
        <span class="font-bold tabular-nums flex items-center">
            {{ $module['dashboard_data']['sum_rain_24'] }} mm
        </span>
    </span>
</li>
@include('netatmo-weather-tile::rows.updated', ['data' => $module['dashboard_data']['time_utc']])
