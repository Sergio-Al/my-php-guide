<?php
require_once 'AbstractVehicle.php';
require_once 'DriveInterface.php';

final class Car extends AbstractVehicle implements DriveInterface
{
    public $doors = 4;
    public $passengerCapacity = 5;
    public $steeringWheel = true;
    public $transmission = 'Manual';
    private $hasKeyinIgnition = true;

    final public function start() // with 'final' cannot be overriden
    {
        if ($this->hasKeyinIgnition) {
            $this->engineStatus = true;
        }
    }

    public function changeSpeed($speed)
    {
        echo "The car has been accelerated to " . $speed . " kph. " . PHP_EOL;
    }

    public function changeGear($gear)
    {
        echo "Shifted to gear number: " . $gear . ". " . PHP_EOL;
    }

    public function applyBreak()
    {
        echo "All the 4 breaks in the wheels applied . " . PHP_EOL;
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


// using our interfaces
echo PHP_EOL;
echo "Using our interfaces" . PHP_EOL;
echo PHP_EOL;
$car1->changeSpeed(65);
$car1->applyBreak();
$car1->changeGear(4);
$car1->changeSpeed(75);
$car1->applyBreak();

// using our method and attribute overloading runtimeAttributes from AbstractVehidle.php
echo PHP_EOL;
echo "Using our methods and attributes overloading" . PHP_EOL;
echo PHP_EOL;

$car1->ownerName = "John Doe";
echo " Owner: " . $car1->ownerName . PHP_EOL;

$car1->year = 2015;
echo " Year: " . $car1->year . PHP_EOL;

$car->wipers; // not initialized, it will be an undefined attribute

$car->honk();
$car->honk("gently");
$car->honk("louder", "siren");
