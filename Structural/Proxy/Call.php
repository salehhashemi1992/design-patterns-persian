<?php

echo "Client: Executing the client code with a real weather service:\n";
$weatherService = new WeatherService('your_api_key', 'https://api.weather.com');
clientCode($weatherService);

echo "\n";

echo "Client: Executing the same client code with a weather service proxy:\n";
$weatherServiceProxy = new WeatherServiceProxy('your_api_key', 'https://api.weather.com');
clientCode($weatherServiceProxy);
