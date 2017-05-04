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
<h1>Problema</h1>

<p>1) Confeccionar una clase Persona que tenga como atributos el nombre y la edad. Definir como responsabilidades un método que cargue los datos personales y otro que los imprima.</p>

<p>2) Plantear una segunda clase Empleado que herede de la clase Persona. Añadir un atributo sueldo y los métodos de cargar el sueldo e imprimir su sueldo.</p>

<p>3) Definir un objeto de la clase Persona y llamar a sus métodos. También crear un objeto de la clase Empleado y llamar a sus métodos.</p>

</div>
<hr>
<?php
//PERSONA
class Persona {
  protected $nom;
  protected $edat;

  public function carregarNom($n) {
    $this->nom=$n;
  }

  public function carregarEdat($e) {
    $this->edat=$e;
  }

  public function imprimir() {
    return $this->nom." ".$this->edat;
  }
}

class Empleat extends Persona {
  private $sou;

  public function carregarSou($value)
  {
    $this->sou=$value;
  }
  public function imprimirSou() {
    return $this->nom.", ".$this->edat.", ".$this->sou."€";
    // return $this->imprimir().", ".$this->sou."€";
    // Això és una altra opció. Així re-aprofitaríem el mètode
    // imprimir de la classe pare.
  }

}

$empleat = new Empleat();
$empleat->carregarNom("Pep");
$empleat->carregarEdat(34);
$empleat->carregarSou(350);
echo $empleat->imprimirSou();






 ?>

</body>
</html>
