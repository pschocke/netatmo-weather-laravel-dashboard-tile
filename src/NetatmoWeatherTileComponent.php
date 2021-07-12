<?php

namespace Pschocke\NetatmoWeatherTile;

use Livewire\Component;
use Spatie\Dashboard\Models\Tile;

class NetatmoWeatherTileComponent extends Component
{
    public string $position;

    public ?array $showDevices;

    public function mount(string $position, $showDevices = null)
    {
        $this->position = $position;
        $this->showDevices = $showDevices;
    }

    public function render()
    {
        return view('netatmo-weather-tile::tile', [
            'devices' => Tile::firstOrCreateForName('netatmo-weather-tile')->getData('devices') ?: [],
        ]);
    }
}
