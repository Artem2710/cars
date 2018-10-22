<?php

class Excavator extends Car
{
	public $onMove = 'гусеницах';

    public function work()
    {
        echo __CLASS__ . ': Рою ямы' . '<br><br>';
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