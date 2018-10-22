<?php

class FireTruck extends Car
{
	public $onMove = 'колесах';

    public function work()
    {
        echo __CLASS__ . ': Тушу пожар' . '<br><br>';
    }

    public function onWhatMoves()
    {
        echo 'Я передвигаюсь на ' . $this->onMove . '<br>';
    }

    public function dreamToRideOnGasoline()
    {
    	echo 'Мечтаю ездить на бензине <br>';
    }
}