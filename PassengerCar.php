<?php

class PassengerCar extends Car
{
	public $onMove = 'колесах';

    public function work()
    {
        echo __CLASS__ . ': Вожу людей' . '<br><br>';
    }

    public function onWhatMoves()
    {
        echo 'Я передвигаюсь на ' . $this->onMove . '<br>';
    }

    public function dreamToRideOnDiesel()
    {
    	echo 'Мечтаю ездить на соляре <br>';
    }
}