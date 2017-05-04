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
<p>Refactorització de l'anterior però fent servir constructor</p>
</div>
<hr>
<?php
//PERSONA
class Persona {
  protected $nom;
  protected $edat;

  // public function carregarNom($n) {
  //   $this->nom=$n;
  // }
  //
  // public function carregarEdat($e) {
  //   $this->edat=$e;
  // }

  public function __construct($n,$e) {
      $this->nom=$n;
      $this->edat=$e;
  }

  public function imprimir() {
    return $this->nom." ".$this->edat;
  }
}

class Empleat extends Persona {
  private $sou;

  // public function carregarSou($value)
  // {
  //   $this->sou=$value;
  // }

  public function __construct($n,$e,$s) {
   parent::__construct($n,$e);
    $this->sou=$s;
  }


  public function imprimir() {
    return $this->nom.", ".$this->edat.", ".$this->sou."€";
    // return $this->imprimir().", ".$this->sou."€";
    // Això és una altra opció. Així re-aprofitaríem el mètode
    // imprimir de la classe pare.
  }

}

// $empleat = new Empleat();
// $empleat->carregarNom("Pep");
// $empleat->carregarEdat(34);
// $empleat->carregarSou(350);

$empleat = new Empleat("Paco",67,250);
echo $empleat->imprimir();





 ?>

</body>
</html>
