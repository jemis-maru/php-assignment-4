<?php

namespace solutions;

class Person
{
  public $name;
  public $age;
  public $gender;

  public function __construct($name, $age, $gender)
  {
    $this->name = $name;
    $this->age = $age;
    $this->gender = $gender;
  }

  public function logInfo()
  {
    echo "Name: {$this->name}, Age: {$this->age}, Gender: {$this->gender} <br />";
  }
}

$person1 = new Person("Jemis", 22, "Male");
$person2 = new Person("Bhumik", 23, "Male");

echo "Person1's name: " . $person1->name . "<br />";

$person1->logInfo();

$person2->logInfo();

?>
