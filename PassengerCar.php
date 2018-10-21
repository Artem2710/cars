<?php

class PassengerCar extends Car
{

    public function work()
    {
        echo __CLASS__ . ': Вожу людей' . '<br><br>';
    }
}