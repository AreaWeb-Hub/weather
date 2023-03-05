<?php

namespace AreaWeb\Weather\API;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class WeatherClient
{
    private const HOST = 'https://api.weatherapi.com/v1/current.json';

    private $client;

    public function __construct(
        private readonly string $apiKey
    )
    {
        $this->client = new Client();
    }

    /**
     * @throws GuzzleException
     */
    public function request(string $query): array
    {
        $endpoint = self::HOST . '?' . http_build_query([
            'key' => $this->apiKey,
            'q' => $query
        ]);

        $response = $this->client->get($endpoint);

        return json_decode($response->getBody()->getContents(), true);
    }
}