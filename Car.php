<?php

abstract class Car
{
    protected $tank;
    protected $fuelСonsumption;

    public function __construct(int $tank, int $fuelСonsumption)
    {
        $this->tank = abs($tank);
        $this->fuelСonsumption = abs($fuelСonsumption);
    }

    /**
     * @return mixed
     */
    public function getFuelСonsumption()
    {
        return $this->fuelСonsumption;
    }

    /**
     * @return mixed
     */
    public function getTank()
    {
        return $this->tank;
    }

    public function calcNumMilesOnFullTank()
    {
        return 'Полного бака хватит на ' . $this->tank / $this->fuelСonsumption * 100 . 'км <br>';
    }

    abstract public function work();
}