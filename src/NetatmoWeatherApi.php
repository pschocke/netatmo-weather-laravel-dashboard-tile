<?php


namespace Pschocke\NetatmoWeatherTile;


use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Spatie\Dashboard\Models\Tile;

class NetatmoWeatherApi
{
    private string $basePath = "https://api.netatmo.com/api/getstationsdata";

    private string $oauthApiPath = "https://api.netatmo.com/oauth2/token";

    private ?string $accessToken = null;

    private ?Tile $tile = null;

    public function __construct()
    {
        $this->tile = Tile::firstOrCreateForName('netatmo-weather-tile');

        $access_data = $this->tile->getData('access_data');

        if (! $access_data || $access_data['token'] == null || Carbon::parse($access_data['expires'])->lte(now())) {
            $this->getApiToken();
        } else {
            $this->accessToken = decrypt($access_data['token']);
        }
    }

    public function getApiToken()
    {
        $response = Http::asForm()->post($this->oauthApiPath, [
            'grant_type' => 'password',
            'client_id' => config('dashboard.tiles.netatmo-weather.client_id'),
            'client_secret' => config('dashboard.tiles.netatmo-weather.client_secret'),
            'username' => config('dashboard.tiles.netatmo-weather.email'),
            'password' => config('dashboard.tiles.netatmo-weather.password'),
            'scope' => 'read_station'
        ]);

        $this->tile = $this->tile->putData('access_data' , [
            'token' => encrypt($response->json()['access_token']),
            'expires' => now()->addSeconds($response->json()['expires_in']),
        ]);
    }

    public function getData($retry = true)
    {
        $response = Http::withToken($this->accessToken)->get($this->basePath);

        if ($response->failed()) {
            if ($response->status() == 403 && $retry) {
                $this->getApiToken();
                $this->getData(false);
                return;
            }
            $response->throw();
        }

        $this->tile->putData('devices', $response->json()['body']['devices']);

    }
}
