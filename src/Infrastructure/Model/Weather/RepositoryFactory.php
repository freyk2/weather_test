<?php
declare(strict_types=1);

namespace App\Infrastructure\Model\Weather;

use App\Model\Weather\Repository\WeatherRepositoryInterface;

class RepositoryFactory
{
    public function createRepository(string $type): WeatherRepositoryInterface
    {
        $className = 'App\Infrastructure\Model\Weather\Repository\\' . mb_strtoupper($type) . 'WeatherRepository';
        if (class_exists($className)) {
            return new $className;
        }

        throw new \Exception('Данный тип не поддерживается');
    }
}