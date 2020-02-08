<?php

declare(strict_types=1);

namespace App\Model\Weather\UseCases;

use App\Model\Weather\Entity\Weather;

interface WeatherLoaderInterface
{
    public function load(): Weather;
}