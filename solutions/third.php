<?php

namespace solutions;

class Vehicle
{
  protected $brand;
  protected $model;

  public function __construct($brand, $model)
  {
    $this->brand = $brand;
    $this->model = $model;
  }

  public function getBrand()
  {
    return $this->brand;
  }

  public function getModel()
  {
    return $this->model;
  }
}

class Car extends Vehicle
{
  private $numDoors;

  public function __construct($brand, $model, $numDoors)
  {
    parent::__construct($brand, $model);

    $this->numDoors = $numDoors;
  }

  public function getNumDoors()
  {
    return $this->numDoors;
  }
}

$car = new Car("Toyota", "Legender", 4);

echo "Brand: " . $car->getBrand() . "<br />";
echo "Model: " . $car->getModel() . "<br />";
echo "Number of Doors: " . $car->getNumDoors() . "<br />";

?>
