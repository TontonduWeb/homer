<?php
require_once 'Vehicle.php';

class Trucks extends Vehicle


{
    protected int $stockageCapacity;
    protected int $loading = 0;
    protected bool $isFull = true;
    protected string $name;

    public function __construct(string $color, int $nbSeats, int $stockageCapacity, string $name)
    {
        parent::__construct($color, $nbSeats, 'fuel');
        $this->setStockageCapacity($stockageCapacity);
        $this->name = $name;
    }

    public function changeWheel()
    {

    }

    public function charging(): string
    {
        if ($this->isFull == 100) {
            return 'Full';
        } else {
            return 'in filling';
        }
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }


    /**
     * @param bool $isFull
     */
    public function setIsFull(bool $isFull): void
    {
        $this->isFull = $isFull;
    }

    /**
     * @return int
     */
    public function getStockageCapacity(): int
    {
        return $this->stockageCapacity;
    }

    /**
     * @param int $stockageCapacity
     */
    public function setStockageCapacity(int $stockageCapacity): void
    {
        $this->stockageCapacity = $stockageCapacity;
    }

    /**
     * @return int
     */
    public function getLoading(): int
    {
        return $this->loading;
    }

    /**
     * @param int $loading
     */
    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }

}