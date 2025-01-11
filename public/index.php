<?php

interface vehicleTraits
{
    public function Honk();
    public function Brake();
    public function Steer();
}

class Car implements vehicleTraits
{
    public $model;
    public $color;
    public $speed;

    public function __construct($model, $color = "", $speed)
    {
        $this->model = $model;
        $this->color = $color;
        $this->speed = $speed;
    }

    public function Honk()
    {
        echo "Beep Beep!\n";
    }
    public function Brake()
    {
        echo "Screech!\n";
    }
    public function Steer()
    {
        echo "Turning...\n";
    }
}
$car = new Car('E350', "Green", 230);
echo $car->Honk();
echo $car->Brake();
echo $car->Steer();
