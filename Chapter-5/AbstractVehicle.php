<?php

// With constructor
abstract class AbstractVehicle
{
    public $make;
    public $model;
    public $color;
    protected $noOfWheels;
    private $engineNumber;
    public static $counter = 0;
    protected $engineStatus = false;
    protected $price;
    private $runtimeAttributes = array();

    function __construct(
        $make = 'DefaultMake',
        $model = 'DefaultModel',
        $color = 'DefaultColor',
        $wheels = 4,
        $engineNo = 'XXXXXXX'
    ) {
        $this->make = $make;
        $this->model = $model;
        $this->color = $color;
        $this->noOfWheels = $wheels;
        $this->engineNumber = $engineNo;
        self::$counter++;
    }

    function getMake()
    {
        return $this->make;
    }

    function getModel()
    {
        return $this->model;
    }

    function getColor()
    {
        return $this->color;
    }

    function getNoOfWheels()
    {
        return $this->noOfWheels;
    }

    function getEngineNumber()
    {
        return $this->engineNumber;
    }

    function setMake($make)
    {
        $this->make = $make;
    }

    function setModel($model)
    {
        $this->model = $model;
    }

    function setColor($color)
    {
        $this->color = $color;
    }

    function setNoOfWheels($wheels)
    {
        $this->noOfWheels = $wheels;
    }

    function setEngineNumber($engineNo)
    {
        $this->engineNumber = $engineNo;
    }

    abstract function start();

    function stop()
    {
        $this->engineStatus = false;
    }

    function getEngineStatus()
    {
        return $this->engineStatus;
    }

    function getPrice()
    {
        return $this->price;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }

    // for attribute overloading we use __set and __get with runtimeAttributes array
    function __set($attribute, $value)
    {
        $this->runtimeAttributes[$attribute] = $value;
    }

    function __get($attribute)
    {
        if (array_key_exists($attribute, $this->runtimeAttributes)) {
            return $this->runtimeAttributes[$attribute];
        } else {
            echo "Error: Undefined attribute. " . PHP_EOL;
        }
    }

    // for methods oveloading we use __call()
    function __call($method, $arguments)
    {
        switch ($method) {
            case 'honk':
                if (isset($arguments[0])) {
                    echo "Honking $arguments[0]..." . PHP_EOL;
                } else {
                    echo "Honking.... " . PHP_EOL;
                }
                if (isset($arguments[1])) {
                    echo "$arguments[1] enabled... " . PHP_EOL;
                }
                break;
            default:
                echo "The method $method() called. " . PHP_EOL;
                break;
        }
    }
}

// Without constructor
// class Vehicle
// {
//     public $make = 'DefaultMake';
//     public $model = 'DefaultModel';
//     public $color = 'DefaultColor';
//     public $noOfWheels = 0;
//     public $engineNumber = 'XXXXXXXXX';

//     function getMake()
//     {
//         return $this->make;
//     }

//     function getModel()
//     {
//         return $this->model;
//     }

//     function getColor()
//     {
//         return $this->color;
//     }

//     function getNoOfWheels()
//     {
//         return $this->noOfWheels;
//     }

//     function getEngineNumber()
//     {
//         return $this->engineNumber;
//     }

//     function setMake($make)
//     {
//         $this->make = $make;
//     }

//     function setModel($model)
//     {
//         $this->model = $model;
//     }

//     function setColor($color)
//     {
//         $this->color = $color;
//     }

//     function setNoOfWheels($wheels)
//     {
//         $this->noOfWheels = $wheels;
//     }

//     function setEngineNumber($engineNo)
//     {
//         $this->engineNumber = $engineNo;
//     }
// }

// $object = new Vehicle();

// $object->setMake('Honda');
// $object->setModel('Civic');
// $object->setColor('Red');
// $object->setNoOfWheels('4');
// $object->setEngineNumber('ABC123456');

// //Access data objects
// echo "Make: " . $object->getmake() . PHP_EOL;
// echo "Model: " . $object->getModel() . PHP_EOL;
// echo "Color: " . $object->getColor() . PHP_EOL;
// echo "No of wheels: " . $object->getNoOfWheels() . PHP_EOL;
// echo "Engine no. : " . $object->getEngineNumber() . PHP_EOL;
