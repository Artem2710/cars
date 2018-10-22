<?php

class Tractor extends Car
{
	public $onMove = 'гусеницах';

    public function work()
    {
        echo __CLASS__ . ': Я пашу землю' . '<br><br>';
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