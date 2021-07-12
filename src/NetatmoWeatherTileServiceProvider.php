<?php

namespace Pschocke\NetatmoWeatherTile;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class NetatmoWeatherTileServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                FetchNetatmoWeatherDataCommand::class,
            ]);
        }

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/netatmo-weather-tile'),
        ], 'netatmo-weather-tile');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'netatmo-weather-tile');

        Livewire::component('netatmo-weather-tile', NetatmoWeatherTileComponent::class);
    }
}
