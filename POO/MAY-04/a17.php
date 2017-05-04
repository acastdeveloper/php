<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<div class="problema">
<h1>Problema:</h1>
  <p>1. Plantear una clase abstracta Trabajador. Definir como atributo su nombre y sueldo. Declarar un método abstracto: calcularSueldo. Definir otro método para imprimir el numbre y su sueldo.</p>

  <p>2. Plantear una subclase Empleado. Definir el atributo $horasTrabajadas, $valorHora. Para calcular el sueldo tener en cuenta que se le paga 3.50 la hora.</p>

  <p>3. Plantear una clase Gerente que herede de la clase Trabajador. Para calcular el sueldo tener en cuenta que se le abona un 10% de las ganancias de la empresa.
</p>

</div>

<?php

abstract class Treballador
{

  protected $nom;
  protected $sou;

  public function imprimir()
  {
    echo $this->nom.": ".$this->sou;
  }

  public abstract function calcularSueldo();

}


class Empleat extends Treballador
{
  private $horasTrabajadas;
  private $valorHora =3.50;

  public function __construct($n,$hT) {
    return $this->horasTrabajadas =$hT;
    parent::__construct($n);
  }

  public function calcularSueldo()
  {
    return $this->sou = $this->horasTrabajadas*$this->valorHora;


  }

}


// class Gerent extends Treballador
// {
//
//   private $gananciasEmpresa;
//   private $percent =10;
//
//   public function __construct($gE) {
//     return $this->gananciasEmpresa;
//   }
//
//
//   public function calcularSueldo()
//   {
//     return $this->percent*$this->gananciasEmpresa;
//
//   }
//
// }


$currante1 = new Empleat("Paco",35);
$currante1->calcularSueldo();
$currante1->imprimir();






 ?>




</body>
</html>
