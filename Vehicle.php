<?php

 abstract class Vehicle

{

    protected string $color;
    protected int $currentSpeed;
    protected int $nbSeats;
    protected int $nbWheels;
    protected string $energy;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
        'foot',
        'diesel'
    ];

    public function __construct(string $color, int $nbSeats, string $energy)
    {
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->setEnergy($energy);
    }

    public function forward(): string
    {
    $this->currentSpeed = 15;
    return "Go !";
    }

    public function brake(): string
    {
    $sentence = "";

    while ($this->currentSpeed > 0) {
    $this->currentSpeed--;
    $sentence .= "Brake !!!";
    }
    $sentence .= "I'm stopped !";
    return $sentence;
    }

    public function getCurrentSpeed(): int
    {
    return $this->currentSpeed;
    }

     public function setCurrentSpeed(int $currentSpeed): void
     {
         if($currentSpeed >= 0){
             $this->currentSpeed = $currentSpeed;
         }
     }

    public function getColor(): string
    {
    return $this->color;
    }

    public function setColor(string $color): void
    {
    $this->color = $color;
    }

    public function getNbSeats(): int
    {
    return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
    $this->nbSeats = $nbSeats;
    }

    public function getNbWheels(): int
    {
    return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void
    {
    $this->nbWheels = $nbWheels;
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     */
    public function setEnergy(string $energy): Vehicle
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
}

