<?php


class Speedometer
{
    public const CONVERTER_NUMBER = 1.609;

    public static function converterKmInMiles(int $kilometers)
    {
        return $kilometers / self::CONVERTER_NUMBER;
    }
    public static function converterMilesInKm(int $miles )
    {
        return $miles * self::CONVERTER_NUMBER;
    }
}