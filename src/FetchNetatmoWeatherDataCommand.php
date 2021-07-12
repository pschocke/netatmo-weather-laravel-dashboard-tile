<?php

namespace Pschocke\NetatmoWeatherTile;

use Illuminate\Console\Command;

class FetchNetatmoWeatherDataCommand extends Command
{
    protected $signature = 'dashboard:fetch-netatmo-weather-data';
    protected $description = 'Fetch netatmo weather data';

    public function handle(NetatmoWeatherApi $api): void
    {
        $api->getData();
    }
}
