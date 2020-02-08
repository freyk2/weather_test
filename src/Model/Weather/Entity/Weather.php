<?php
declare(strict_types=1);

namespace App\Model\Weather\Entity;

class Weather
{
    private \DateTimeImmutable $date;
    private float $temperature;
    private string $windDirection;
    private float $windSpeed;

    public function __construct(
        \DateTimeImmutable $date,
        float $temperature,
        string $windDirection,
        float $windSpeed
    )
    {
        $this->date = $date;
        $this->temperature = $temperature;
        $this->windDirection = $windDirection;
        $this->windSpeed = $windSpeed;
    }

    public function getDate(): \DateTimeImmutable
    {
        return $this->date;
    }

    public function getTemperature(): float
    {
        return $this->temperature;
    }

    public function setTemperature(float $temperature): void
    {
        $this->temperature = $temperature;
    }

    public function getWindDirection(): string
    {
        return $this->windDirection;
    }

    public function setWindDirection(string $windDirection): void
    {
        $this->windDirection = $windDirection;
    }

    public function getWindSpeed(): float
    {
        return $this->windSpeed;
    }

    public function setWindSpeed(float $windSpeed): void
    {
        $this->windSpeed = $windSpeed;
    }
}