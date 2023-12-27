<?php

namespace solutions;

interface Shape
{
  public function calculateArea();
}

class Circle implements Shape
{
  private $radius;

  public function __construct($radius)
  {
    $this->radius = $radius;
  }

  public function calculateArea()
  {
    return M_PI * $this->radius * $this->radius;
  }
}

class Rectangle implements Shape
{
  private $width;
  private $height;

  public function __construct($width, $height)
  {
    $this->width = $width;
    $this->height = $height;
  }

  public function calculateArea()
  {
    return $this->width * $this->height;
  }
}

$circle = new Circle(3);
$rectangle = new Rectangle(3, 4);

echo "Area of Circle: " . $circle->calculateArea() . "<br />";

echo "Area of Rectangle: " . $rectangle->calculateArea() . "<br />";

?>
