<?php

require_once 'vehicle.php';
require_once 'car.php';
require_once 'bicycle.php';
require_once 'truck.php';

$bike = new Bicycle('green', 1);
var_dump($bike);

$bike->setCurrentSpeed(15);

echo $bike->forward();
echo '<br> Bike speed : ' . $bike->getCurrentSpeed() . 'km/h' . '<br>';
echo $bike->brake();
echo '<br> Bike speed : ' . $bike->getCurrentSpeed() . 'km/h' . '<br>';
echo $bike->brake() . '<br>';

$canyonera = new Car('red', 5, 'Gazoil');
var_dump($canyonera);

$canyonera->setCurrentSpeed(140);

echo $canyonera->forward();
echo '<br> Car speed : ' . $canyonera->getCurrentSpeed() . 'km/h' . '<br>';
echo $canyonera->brake();
echo '<br> Car speed : ' . $canyonera->getCurrentSpeed() . 'km/h' . '<br>';
echo $canyonera->brake() . '<br>';

$truck = new Truck(25, 'red', 2, 'fuel');
var_dump($truck);

$truck->setLoading(25);

echo 'Truck load... : ' . $truck->loadingStatus() . '<br>';

$truck->setCurrentSpeed(80);

echo $truck->forward();
echo '<br> Truck speed : ' . $truck->getCurrentSpeed() . 'km/h' . '<br>';
echo $truck->brake();
echo '<br> Truck speed : ' . $canyonera->getCurrentSpeed() . 'km/h' . '<br>';
echo $truck->brake() . '<br>';

$truck->setLoading(5);
echo 'Truck load... : ' . $truck->loadingStatus();
