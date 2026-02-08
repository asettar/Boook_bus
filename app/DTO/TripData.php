<?php

namespace App\DTO;

class TripData
{
    public string $programName;
    public float $price;
    public float $distance;
    public string $departureTime;
    public string $arrivalTime;
    public array $path;
    public array $pathArrivalTimes;

    public function __construct(
        string $programName,
        float $price,
        float $distance,
        string $departureTime,
        string $arrivalTime,
        array $path,
        array $pathArrivalTimes
    ) {
        $this->programName = $programName;
        $this->price = $price;
        $this->distance = $distance;
        $this->departureTime = $departureTime;
        $this->arrivalTime = $arrivalTime;
        $this->path = $path;
        $this->pathArrivalTimes = $pathArrivalTimes;
    }
}
