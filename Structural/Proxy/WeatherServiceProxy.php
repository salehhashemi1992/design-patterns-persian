<?php

class WeatherServiceProxy implements Subject
{
    private WeatherService $weatherService;
    private array $cache;

    public function __construct(string $apiKey, string $baseUrl)
    {
        $this->weatherService = new WeatherService($apiKey, $baseUrl);
        $this->cache = [];
    }

    public function request(): void
    {
        // Check if the weather information is already in the cache.
        $cacheKey = $this->generateCacheKey();
        if (isset($this->cache[$cacheKey])) {
            echo "WeatherServiceProxy: Retrieving weather information from cache.\n";
            return;
        }

        // Otherwise, retrieve the weather information from the remote API.
        $this->weatherService->request();

        // Cache the retrieved weather information for future requests.
        $this->cache[$cacheKey] = true;
    }

    private function generateCacheKey(): string
    {
        // Generate a cache key based on the current date and time.
        return date('Y-m-d H:i');
    }
}
