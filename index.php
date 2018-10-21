<?php

require_once ('Car.php');
require_once ('CleaningCar.php');
require_once ('Excavator.php');
require_once ('FireTruck.php');
require_once ('PassengerCar.php');
require_once ('Tractor.php');

$ravo = new CleaningCar(60, 20);
$HitachiZX = new Excavator(320, 50);
$zilAC40 = new FireTruck(175, 25);
$bmwX5 = new PassengerCar(85, 12,7);
$t150 = new Tractor(315, 40);

echo $ravo->calcNumMilesOnFullTank();
echo $ravo->work();

echo $HitachiZX->calcNumMilesOnFullTank();
echo $HitachiZX->work();

echo $zilAC40->calcNumMilesOnFullTank();
echo $zilAC40->work();

echo $bmwX5->calcNumMilesOnFullTank();
echo $bmwX5->work();

echo $t150->calcNumMilesOnFullTank();
echo $t150->work();