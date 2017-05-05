<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<div class="exercici">
<h1>Coding exercise</h1>
In the following example, we will create an Admin class, which is a child class of the User class.
<ol>
  <li>Create a user class.</li>
  <li>Add to the class a private property with the name of $username.</li>
  <li>Create a setter method that can set the value of the $username.</li>
  <li>Create a class Admin that inherits the User class.</li>
  <li>Now, let’s add to the Admin class some code. First, add a public method by the name of
  expressYourRole, and make it return the string: "Admin".</li>
  <li>Add to the Admin class another public method, sayHello, that returns the string “Hello
  admin, XXX” with the username instead of XXX.</li>
  <li>Create an object $admin1 out of the class Admin, set its name to "Balthazar", and say
  hello to the user. Do you see any problem?</li>
  <li>What do you think is the cause of the problem?</li>
  <li>How will you fix this problem?</li>
</ol>

</div>

<?php

/**
 *
 */
class User
{
  private $username;

  protected function iniciarUsuari($n)
  {
    $this->username =$n;
  }

}


class Admin extends User
{
  public function expressYourRole()
  {
    return "Admin";
  }

  public function sayHello()
  {
    //$this->username =$n;
    return "Hello: ".$this->username;
  }
}

$admin1 = new Admin;

$admin1->iniciarUsuari("Basaltar");
echo $admin1->sayHello();


 ?>



</body>
</html>
