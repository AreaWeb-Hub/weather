<?php

namespace AreaWeb\Weather;

use AreaWeb\Weather\API\WeatherClient;
use AreaWeb\Weather\Models\Result;
use GuzzleHttp\Exception\GuzzleException;
use IlluminateAgnostic\Arr\Support\Arr;

class Weather
{
    private string $location;
    private WeatherClient $client;

    public function __construct(string $apiKey)
    {
        $this->client = new WeatherClient($apiKey);
    }

    public function location(string $location): Weather
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @throws GuzzleException
     */
    public function get(): Result
    {
        $data = $this->client->request($this->location);

        return (new Result())
            ->setCelsius(Arr::get($data, 'current.temp_c', 0))
            ->setFahrenheit(Arr::get($data, 'current.temp_f', 0));
    }
}