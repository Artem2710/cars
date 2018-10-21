<?php

class CleaningCar extends Car
{

    public function work()
    {
        echo __CLASS__ . ': Я чищу дорогу' . '<br><br>';
    }
}