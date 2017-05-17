<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <header>
    <h1>Activat 02 - 3 i 4</h1>
    <p>Crea una classe Usuari quemodeli un usari d'un sistema operatiu.</p>
    <p>Ha de tenir dues propietats, $nom i $password</p>
    <ol>
      <li>Crea els seus getter i setter per cadascuna de les propietats.</li>
      <li>Crea el constructor de la classe que rebi per paràmetres el nom i el password</li>
      <li style="border:1px solid red;">Crea un mètode anomenat saludar() que mostri per pantalla "hola sóc el Joan", en cas que el seu nom fos Joan.</li>
      <li style="border:1px solid red;">Crea una classe Administrador que estengui d'Usuari. Ha de tenir un mètode anomenat "banear" que accepti un paràmetre nomUsuario, i que en ser cridat mostri per pantalla ( en el cas que s'hagi cridat amb el nom d'usuari banejat Pere), 'Pere ha estat banejat'.</li>
    </ol>
  </header>

<main>

  <?php

class Usuari
{
    public $nom;
    public $password;

    public function __construct($n,$p) {
        $this->nom = $n;
        $this->password = $p;
        $this->saludar();
        $this->banear();
    }



    public function getNom()
    {
        return $this->nom;

    }



    public function getPassword()
    {
        return $this->password;
    }


    public function saludar() {
        if($this->nom =='Joan') {
            echo "Hola, sóc Joan";
        }
    }


    public function banear() {
        if($this->nom =='Pere') {
            echo "Pere ha estat banejat";
        }
    }

    }


echo "Provant amb Joan:<br>";
$user1 = new Usuari('Joan',null);

echo "<hr>Provant amb Pep:<br>";
$user2 = new Usuari('Pep',null);

echo "<hr>Provant amb Pere:<br>";
$user3 = new Usuari('Pere',null);







   ?>



</main>


</body>
</html>
