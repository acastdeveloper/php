<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<h1>  Coding exercise
</h1>
<p>In the following example, we will create an abstract User class and two child classes (Admin and
  Viewer classes) that inherit from the abstract class.</p>
<ol>
  <li>Create an abstract class with the name of User, which has an abstract method with the
  name of stateYourRole.</li>
  <li>Add to the class a protected variable with the name of $username, and public setter and
  getter methods to set and get the $username.</li>
  <li>Create an Admin class that inherits the abstract User class.</li>
  <li>Which method should be defined in the class?</li>
  <li>Define the method stateYourRole() in the child class and make it return the string
  “admin”;</li>
<li>Create another class, Viewer that inherits the User abstract class. Define the method
  that should be defined in each child class of the User class.</li>
  <li>Create an object from the Admin class, set the username to “Balthazar”, and make it
  return the string “admin”.</li>
</ol>

<?php

/**
 *
 */
abstract class User
{
  protected $username;

  public function setName($n) {
    $this->username;
  }

  public function getName() {
    return $this->username;
  }

  abstract function stateYourRole();
}


/**
 *
 */
class Admin extends User
{
  function stateYourRole()
  {
    return "admin";
  }
}

class Viewer extends User
{
  function stateYourRole()
  {
    return "viewer";
  }
}


$usuari = new Admin;
$usuari->setname("Basaltar");
echo $usuari->stateYourRole();




 ?>


</body>
</html>
