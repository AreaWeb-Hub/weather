# Weather

Пакет для получения погоды по любой локации

### Установка

```shell
composer require areaweb/weather
```

### Использование

```php
<?php

use AreaWeb\Weather\Weather;

// https://www.weatherapi.com/docs/
$apiKey = '**********';

$weather = new Weather($apiKey);

$weather = $weather
    ->location('Moscow')
    ->get();

echo "Погода в цельсиях: {$weather->getCelsius()}\n"
echo "Погода по фаренгейту: {$weather->getFahrenheit()}"
```