<?php

namespace solutions;

class Person
{
  private $name;
  private $age;
  private $gender;

  public function __construct($name, $age, $gender)
  {
    $this->name = $name;
    $this->age = $age;
    $this->gender = $gender;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($newName)
  {
    return $this->name = $newName;
  }
}

$person1 = new Person("Jemis", 22, "Male");
$person2 = new Person("Bhumik", 23, "Male");

// echo "Person1's name: " . $person1->name . "<br />"; // Can't access private modifiers.

echo "Old name: " . $person1->getName() . "<br />";

// $person1->name = "Test"; // can't set private properties.

$person1->setName('Jemis Maru');

echo "New name: " . $person1->getName() . "<br />";

?>
