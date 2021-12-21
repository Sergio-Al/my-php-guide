<?php
require_once 'AbstractVehicle.php';
require_once 'DriveInterface.php';

class Motorcycle extends AbstractVehicle implements DriveInterface
{
    public $noOfWheels = 2;
    public $stroke = 4;
    private $hasKey = true;
    private $hasKicked = true;

    public function start()
    {
        if ($this->hasKey && $this->hasKicked) {
            $this->engineStatus = true;
        }
    }

    public function changeSpeed($speed)
    {
        echo "The motorcycle has been accelerated to " . $speed . "kph. " . PHP_EOL;
    }

    public function changeGear($gear)
    {
        echo "Gear shifted to " . $gear . ". " . PHP_EOL;
    }

    public function applyBreak()
    {
        echo "The break applied.  " . PHP_EOL;
    }

    function getPrice()
    {
        return $this->price - $this->price * 0.05;
    }
}

$motorcycle = new Motorcycle("Kawasaki", "Ninja", "Orange", 2, "53WVC14598");

echo "Vehicle Type: " . get_class($motorcycle) . PHP_EOL;
echo "Make: " . $motorcycle->make . PHP_EOL;
echo "Model: " . $motorcycle->model . PHP_EOL;
echo "Color: " . $motorcycle->color . PHP_EOL;
echo "No of wheels: " . $motorcycle->noOfWheels . PHP_EOL;
echo "No of strokes: " . $motorcycle->stroke . PHP_EOL;

// creating multiple intances of motorcycle
$motorcycle1 = new Motorcycle('Kawasaki', 'Ninja', 'Red', 2, '53WVC14593');
$motorcycle2 = new Motorcycle('Suzuki', 'Gixxer SF', 'Blue', 2, '53WC14599');
$motorcycle3 = new Motorcycle('Harley Davinson', 'Street 750', 'Black', 2, '53WVC14234');

// The count of how many Motorcycle intances (objects) we have
echo "Available motorcycles are " . Motorcycle::$counter . PHP_EOL;


// using our abstracted start function from the AbstractedVehicle class
$motorcycle->start();
echo 'The motorcycle is ' . ($motorcycle->getEngineStatus() ? 'running' : 'stopped') . PHP_EOL;

// using our stop method from our Abstracted class AbstractedVehicle
$motorcycle->stop();
echo 'The motorcyle is ' . ($motorcycle->getEngineStatus() ? 'running' : 'stopped') . PHP_EOL;

// using our interfaces
echo PHP_EOL;
echo "Using our intefaces DriveInterface" . PHP_EOL;
echo PHP_EOL;

$motorcycle1->changeSpeed(45);
$motorcycle1->changeGear(3);
$motorcycle1->applyBreak();


// overriding methods and attributes
echo PHP_EOL;
echo "Overriding" . PHP_EOL;
echo PHP_EOL;

$motorcycle1->setPrice(5000);
echo "The price is " . $motorcycle1->getPrice() . PHP_EOL;
