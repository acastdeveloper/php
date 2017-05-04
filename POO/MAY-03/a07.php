<?php

class Car {
// The private access modifier denies access to the
// method from outside the class’s scope
private $model;
private $allowedModels = array("Mercedes","Volvo");
// The public access modifier allows the access to
// the method from outside the class
public function setModel($model)
{
// Validate that only certain car models are assigned
// to the $carModel property
if(in_array($model,$allowedModels))
{
$this -> model = $model;
}
}
public function getModel()
{
return "The car model is " . $this -> model;
}
}
$mercedes = new Car();
// Set the car’s model
$mercedes -> setModel("Mercedes");
// Get the car’s model
echo $mercedes -> getModel();

 ?>
