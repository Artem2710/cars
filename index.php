<?php

require_once ('Car.php');
require_once ('CleaningCar.php');
require_once ('Excavator.php');
require_once ('FireTruck.php');
require_once ('PassengerCar.php');
require_once ('Tractor.php');

$ravo = new CleaningCar(60, 20, 9000);
$HitachiZX = new Excavator(320, 50, 5000);
$zilAC40 = new FireTruck(175, 25, 300000);
$bmwX5 = new PassengerCar(85, 12, 200000);
$t150 = new Tractor(315, 40, 100000);

echo $ravo->calcNumMilesOnFullTank();
echo $ravo->calcNumOfLitersPerMileage();
echo $ravo->onWhatMoves();
echo $ravo->dreamToRideOnDiesel();
echo $ravo->work();

echo $HitachiZX->calcNumMilesOnFullTank();
echo $HitachiZX->calcNumOfLitersPerMileage();
echo $HitachiZX->onWhatMoves();
echo $HitachiZX->dreamToRideOnGasoline();
echo $HitachiZX->work();

echo $zilAC40->calcNumMilesOnFullTank();
echo $zilAC40->calcNumOfLitersPerMileage();
echo $zilAC40->onWhatMoves();
echo $zilAC40->dreamToRideOnGasoline();
echo $zilAC40->work();

echo $bmwX5->calcNumMilesOnFullTank();
echo $bmwX5->calcNumOfLitersPerMileage();
echo $bmwX5->onWhatMoves();
echo $bmwX5->dreamToRideOnDiesel();
echo $bmwX5->work();

echo $t150->calcNumMilesOnFullTank();
echo $t150->calcNumOfLitersPerMileage();
echo $t150->onWhatMoves();
echo $t150->dreamToRideOnGasoline();
echo $t150->work();
