<?php
require_once 'Vehicle.php';

class Car extends Vehicle
{
    public $doors = 4;
    public $passengerCapacity = 5;
    public $steeringWheel = true;
    public $transmission = 'Manual';
}

$car = new Car('Honda', 'Civic', 'Red', 4, '23CJ4567');

echo "Vehicle type: " . get_class($car) . PHP_EOL; // get_class() returns the class name that we have used to obtain the Vehicle type as a class name
echo "Make: " . $car->getMake() . PHP_EOL;
echo "Model: " . $car->getModel() . PHP_EOL;
echo "Color: " . $car->getColor() . PHP_EOL;
echo "No of wheels: " . $car->getNoOfWheels() . PHP_EOL;
echo "No of doors: " . $car->doors . PHP_EOL;
echo "Transmission:  " . $car->transmission . PHP_EOL;
echo "Passenger capacity: " . $car->passengerCapacity . PHP_EOL;
echo "Engine No: " . $car->engineNumber . PHP_EOL; // this will raise a Notice message only because the property is completely unknown to the object. (private in Vehicle)
