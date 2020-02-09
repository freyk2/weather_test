<?php
declare(strict_types=1);

namespace App\Infrastructure\Model\Weather\Repository;

use App\Model\Weather\Entity\Weather;
use App\Model\Weather\Repository\WeatherRepositoryInterface;

class JSONWeatherRepository implements WeatherRepositoryInterface
{
    public function add(Weather $weather): void
    {
        $formattedArray = [
            'date' => $weather->getDate()->format('Y-m-d'),
            'temperature' => $weather->getTemperature(),
            'windDirection' => $weather->getWindDirection(),
            'windSpeed' => $weather->getWindSpeed()
        ];

        $filePath = realpath('files/weather.json');
        $file = file_get_contents($filePath);
        if(!$file){
            $weatherList = [];
        } else {
            $weatherList = json_decode($file, true);
        }
        $weatherList[] = $formattedArray;
        file_put_contents($filePath, json_encode($weatherList));
    }
}