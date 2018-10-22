<?php

abstract class Car
{
    protected $tank;
    protected $fuelСonsumption;
    protected $mileage;


    public function __construct(int $tank, int $fuelСonsumption, int $mileage)
    {
        $this->tank = abs($tank);
        $this->fuelСonsumption = abs($fuelСonsumption);
        $this->mileage = abs($mileage);
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

    /**
     * @return mixed
     */
    public function getMileage()
    {
        return $this->mileage;
    }

    public function calcNumMilesOnFullTank()
    {
        return 'Полного бака хватит на ' . $this->tank / $this->fuelСonsumption * 100 . 'км <br>';
    }

    abstract public function work();

    public function calcNumOfLitersPerMileage()
    {
        return 'За свой пробег в ' . $this->mileage . ' км потратил ' . $this->fuelСonsumption * $this->mileage / 100 . ' л <br>';
    }

    abstract public function onWhatMoves();
}