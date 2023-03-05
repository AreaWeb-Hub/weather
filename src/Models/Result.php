<?php

namespace AreaWeb\Weather\Models;

class Result
{
    private float|int $fahrenheit;
    private float|int $celsius;

    /**
     * @param float|int $fahrenheit
     * @return Result
     */
    public function setFahrenheit(float|int $fahrenheit): Result
    {
        $this->fahrenheit = $fahrenheit;
        return $this;
    }

    /**
     * @param float|int $celsius
     * @return Result
     */
    public function setCelsius(float|int $celsius): Result
    {
        $this->celsius = $celsius;
        return $this;
    }

    /**
     * @return float|int
     */
    public function getFahrenheit(): float|int
    {
        return $this->fahrenheit;
    }

    /**
     * @return float|int
     */
    public function getCelsius(): float|int
    {
        return $this->celsius;
    }
}