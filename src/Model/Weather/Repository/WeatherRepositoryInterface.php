<?php

declare(strict_types=1);

namespace App\Model\Weather\Repository;

use App\Model\Weather\Entity\Weather;

interface WeatherRepositoryInterface
{
    public function add(Weather $weather): void;
}