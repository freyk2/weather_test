<?php
declare(strict_types=1);

namespace App\Infrastructure\Model\Repository\Weather;

use App\Model\Weather\Entity\Weather;
use App\Model\Weather\Repository\WeatherRepositoryInterface;

class XMLWeatherRepository implements WeatherRepositoryInterface
{
    public function add(Weather $weather): void
    {

    }
}