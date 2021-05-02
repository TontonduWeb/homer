<?php

require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface

{
    protected int $energyLevel;

    private bool $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats, 'electric');
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function switchOff(bool $light): bool
    {
        return false;
    }

    public function switchOn(bool $light): bool
    {
        return true;
    }

    public function triggerParkBrake()
    {
        $this->hasParkBrake = !$this->hasParkBrake;
        return $this;
    }

    public function setParkBrake($hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start()
    {
        if ($this->hasParkBrake) {
            throw new Exception("Homer the brake is on");
        }
    }


    public function changeWheel()
    {

    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    /**
     * @return bool
     */
    public function isHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    /**
     * @param bool $hasParkBrake
     */
    public function setHasParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }


}
