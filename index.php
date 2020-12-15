<?php

require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

$car1 = new Car('yellow', '4', 'fuel');

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$truck = new Truck('red', 2, 'fuel', 100);
echo $truck->forward();
echo $truck->setActualStorage(50);
echo $truck->getActualStorage();
var_dump($truck);
