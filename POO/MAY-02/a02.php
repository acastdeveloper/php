<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
//http://www.tutorialesprogramacionya.com/phpya/poo/temarios/descripcion.php?cod=36&punto=2&inicio=0
// PROBLEMA:
// Confeccionar una clase Empleado, definir como atributos su nombre y sueldo.
// Definir un método inicializar que lleguen como dato el nombre y sueldo. Plantear un segundo método que imprima el nombre y un mensaje si debe o no pagar impuestos (si el sueldo supera a 3000 paga impuestos)
//http://www.tutorialesprogramacionya.com/phpya/poo/problemas/resolverproblema.php?cod=36&punto=2&inicio=0

class Empleado {
  private $nombre;
  public $sueldo;

  public function inicializar($name,$salary)
  {
    $this->nombre=$name;
    $this->sueldo=$salary;
  }

  public function imprimir()
  {

    echo $this->nombre;
    echo ":";
    if($this->sueldo >= 3000) {
      echo "Paga impostos";
    } else {
      echo "No paga impostos";
    }
    echo "<br>";

  }
}

$emp1 = new Empleado();
$emp1 -> inicializar('Paco', 250);
$emp1 -> imprimir();

$emp2 = new Empleado();
$emp2 -> inicializar('Curro', 90000);
$emp2 -> imprimir();











?>
</body>
</html>
