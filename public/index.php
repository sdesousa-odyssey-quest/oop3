<?php

require '../vendor/autoload.php';

use App\Vehicle;
use App\HighWay;

$motorWay = new HighWay\MotorWay();
$residentialWay = new HighWay\ResidentialWay();
$pedestrianWay = new HighWay\PedestrianWay();

var_dump($motorWay);
var_dump($pedestrianWay);
var_dump($residentialWay);

$bicycle = new Vehicle\Bicycle('blue', 1);
$skateboard = new Vehicle\Skateboard('grey', 1);
$car = new Vehicle\Car('red', 4, 'electric');
$truck = new Vehicle\Truck('white', 3, 'fuel', 200);

$motorWay->addVehicule($bicycle);
$motorWay->addVehicule($car);
$motorWay->addVehicule($skateboard);
$motorWay->addVehicule($truck);

$residentialWay->addVehicule($bicycle);
$residentialWay->addVehicule($car);
$residentialWay->addVehicule($skateboard);
$residentialWay->addVehicule($truck);

$pedestrianWay->addVehicule($bicycle);
$pedestrianWay->addVehicule($car);
$pedestrianWay->addVehicule($skateboard);
$pedestrianWay->addVehicule($truck);

var_dump($motorWay);
var_dump($pedestrianWay);
var_dump($residentialWay);
