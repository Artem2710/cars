<?php

class Tractor extends Car
{

    public function work()
    {
        echo __CLASS__ . ': Я пашу землю' . '<br><br>';
    }
}