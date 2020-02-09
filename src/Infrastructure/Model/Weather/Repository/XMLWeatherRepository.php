<?php
declare(strict_types=1);

namespace App\Infrastructure\Model\Weather\Repository;

use App\Model\Weather\Entity\Weather;
use App\Model\Weather\Repository\WeatherRepositoryInterface;

class XMLWeatherRepository implements WeatherRepositoryInterface
{
    public function add(Weather $weather): void
    {
        $path = realpath('files/weather.xml');
        $dom = new \DOMDocument();

        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;

        $dom->load($path);

        $weatherTag = $dom->documentElement->appendChild($dom->createElement('weather'));

        $date = $weatherTag->appendChild($dom->createElement('date'));
        $date->appendChild($dom->createTextNode($weather->getDate()->format('Y-m-d H:i:s')));

        $windSpeedTag = $weatherTag->appendChild($dom->createElement('speed'));
        $windSpeedTag->appendChild($dom->createTextNode((string) $weather->getWindSpeed()));

        $temperatureTag = $weatherTag->appendChild($dom->createElement('temperature'));
        $temperatureTag->appendChild($dom->createTextNode((string) $weather->getTemperature()));

        $directionTag = $weatherTag->appendChild($dom->createElement('direction'));
        $directionTag->appendChild($dom->createTextNode((string) $weather->getWindDirection()));

        $dom->save($path);
    }
}