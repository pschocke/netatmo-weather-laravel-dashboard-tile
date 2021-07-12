{{--Outdoor--}}
@include('netatmo-weather-tile::rows.title', ['title' => '🪴️ ' . $module['module_name'], 'reachable' => $module['reachable']])
@include('netatmo-weather-tile::rows.temperature', ['current' => $module['dashboard_data']['Temperature'], 'max' => $module['dashboard_data']['max_temp'], 'min' => $module['dashboard_data']['min_temp']])
@include('netatmo-weather-tile::rows.humidity', ['data' => $module['dashboard_data']['Humidity']])
@include('netatmo-weather-tile::rows.updated', ['data' => $module['dashboard_data']['time_utc']])
