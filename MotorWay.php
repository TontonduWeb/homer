<?php


final class MotorWay extends HighWay
{
    protected array $currentVehicles = ['Voiture', 'Bus', 'Moto', 'Camion'];
    protected int $nbLane = 4;
    protected int $maxSpeed = 130;

    public function addVehicle()
    {

    }
}