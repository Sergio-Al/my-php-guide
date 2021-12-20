<?php
require_once 'Vehicle.php'; // the main class is in Vehicle.php file

$vehicle = new Vehicle();

// will print the default values
echo "Make: " . $vehicle->getMake() . PHP_EOL;
echo "Model: " . $vehicle->getModel() . PHP_EOL;
echo "Color: " . $vehicle->getColor() . PHP_EOL;
echo "No of wheels: " . $vehicle->getNoOfWheels() . PHP_EOL;
echo "Engine No: " . $vehicle->getEngineNumber() . PHP_EOL;

echo PHP_EOL;

$vehicle1 = new Vehicle('Honda', 'Civic', 'Red', 4, '23CJ4567');

// will print with our values
echo "Make: " . $vehicle1->getMake() . PHP_EOL;
echo "Model: " . $vehicle1->getModel() . PHP_EOL;
echo "Color: " . $vehicle1->getColor() . PHP_EOL;
echo "No of wheels " . $vehicle1->getNoOfWheels() . PHP_EOL;
echo "Engine No: " . $vehicle1->getEngineNumber() . PHP_EOL;
