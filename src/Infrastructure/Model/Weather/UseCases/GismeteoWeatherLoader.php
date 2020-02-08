<?php
declare(strict_types=1);

namespace App\Infrastructure\Model\Weather\UseCases;


use App\Model\Weather\Entity\Weather;
use App\Model\Weather\UseCases\WeatherLoaderInterface;

class GismeteoWeatherLoader implements WeatherLoaderInterface
{
    public function load(): Weather
    {
        // TODO: Implement load() method.
    }
}