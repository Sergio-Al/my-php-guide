<?php
require_once 'AbstractVehicle.php';

class Car extends AbstractVehicle
{
    public $doors = 4;
    public $passengerCapacity = 5;
    public $steeringWheel = true;
    public $transmission = 'Manual';
    private $hasKeyinIgnition = true;

    public function start()
    {
        if ($this->hasKeyinIgnition) {
            $this->engineStatus = true;
        }
    }
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
echo "Engine No: " . $car->engineNumber . PHP_EOL; // this will raise a Notice message only because the property is completely unknown to the object. (private in AbstractVehicle class)

// multiple instances of car
$car1 = new Car('Honda', 'Civic', 'Blue', 4, '23CJ3422');
$car2 = new Car('Toyota', 'Alion', 'White', 4, '24CJ3422');
$car3 = new Car('Hyundai', 'Elantra', 'Black', 4, '23CJ9397');
$car4 = new Car('Chevrolet', 'Camaro', 'Black', 4, '24CJ2344');

// printing how many intances we have
echo "Available cars are " . Car::$counter . PHP_EOL;


// using our abstracted start function from the AbstractVehicle class
$car->start();
echo "The Car is " . ($car->getEngineStatus() ? 'running' : 'stopped') . PHP_EOL;

$car->stop();
echo "The Car is " . ($car->getEngineStatus() ? 'running' : 'stopped') . PHP_EOL;
