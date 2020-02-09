<?php
declare(strict_types=1);

namespace App\Infrastructure\Model\Weather\UseCases;

use App\Model\Weather\Entity\Weather;
use App\Model\Weather\UseCases\WeatherLoaderInterface;

class WeatherbitWeatherLoader implements WeatherLoaderInterface
{
    public function load(): Weather
    {
        $url = "https://api.weatherbit.io/v2.0/current?city_id=542420&key=" . $_ENV['WEATHERBIT_APY_KEY'];

        $contents = file_get_contents($url);
        $response = json_decode($contents, true);

        return new Weather(
            $response['data'][0]['temp'],
            $response['data'][0]['wind_dir'],
            $response['data'][0]['wind_spd']
        );
    }
}