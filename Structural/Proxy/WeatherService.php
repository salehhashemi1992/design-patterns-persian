<?php

class WeatherService implements Subject
{
    private string $apiKey;
    private string $baseUrl;

    public function __construct(string $apiKey, string $baseUrl)
    {
        $this->apiKey = $apiKey;
        $this->baseUrl = $baseUrl;
    }

    public function request(): void
    {
        // Make an HTTP request to the remote API to retrieve weather information
        // using the API key and base URL provided.
        // ...
        echo "WeatherService: Retrieving weather information from remote API.\n";
    }
}