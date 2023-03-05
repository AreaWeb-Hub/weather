# Weather

Package for getting weather for any location

### Install

```shell
composer require areaweb/weather
```

### Usage

```php
<?php

use AreaWeb\Weather\Weather;

// https://www.weatherapi.com/docs/
$apiKey = '**********';

$weather = new Weather($apiKey);

$weather = $weather
    ->location('Moscow')
    ->get();

echo "Celsius degrade: {$weather->getCelsius()}\n"
echo "Fahrenheit degrade: {$weather->getFahrenheit()}"
```