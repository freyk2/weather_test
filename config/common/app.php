<?php

declare(strict_types=1);

use App\Model\Weather\UseCases\WeatherLoaderInterface;
use App\Infrastructure\Model\Weather\UseCases\WeatherbitWeatherLoader;

return [
    WeatherLoaderInterface::class => static function() {
        return new WeatherbitWeatherLoader();
    }
];
