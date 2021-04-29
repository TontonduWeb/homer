<?php


final class ResidentialWay extends HighWay
{
    protected array $currentVehicles = ['Piéton', 'Vélo', 'Skateboard', 'Trotinette'];
    protected int $nbLane = 1;
    protected int $maxSpeed = 10;

    public function addVehicle()
    {

    }
}