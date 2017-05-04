<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php

include("cap.php");
include("cos.php");
include("peu.php");



//CLASSE PÀGINA QUE DEPÈN DE LES ALTRES
class Pagina {
  private $cabecera;
  private $cuerpo;
  private $pie;
  //Això són objectes

  public function __construct($texto1,$texto2)
  {
    $this->cabecera=new Cabecera($texto1);
    $this->cuerpo=new Cuerpo();
    $this->pie=new Pie($texto2);
  }

  //Aquest és un mètode la classe pàgina. El curiós és que està cridant a un mètode "insertarparrafo" que es troba a cuerpo
  public function insertarCuerpo($texto)
  {
    $this->cuerpo->insertarParrafo($texto);
    //Això és el mètode de l'objecte cuerpo, definit a la
  }
  public function graficar()
  {
    $this->cabecera->graficar();
    $this->cuerpo->graficar();
    $this->pie->graficar();
  }
}

$pagina1=new Pagina('Título de la Página','Pie de la página');
$pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 1');
$pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 2');
$pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 3');
$pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 4');
$pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 5');
$pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 6');
$pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 7');
$pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 8');
$pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 9');
$pagina1->graficar();
?>
</body>
</html>
