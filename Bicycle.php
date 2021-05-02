<?php

require_once 'Vehicle.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn(bool $light): bool
    {
        return $this->getCurrentSpeed() > 10;
    }

    public function switchOff(bool $light): bool
    {
        return false;
    }
}
