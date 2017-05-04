<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php

// CLASSE CAPÇALERA
class Cabecera {
  private $titulo;
  public function __construct($tit)
  {
    $this->titulo=$tit;
  }
  public function graficar()
  {
    echo '<h1 style="text-align:center">'.$this->titulo.'</h1>';
  }
}

//CLASSE CUERPO
class Cuerpo {
  private $lineas=array();
  public function insertarParrafo($li)
  {
    $this->lineas[]=$li;
  }
  public function graficar()
  {
    for($f=0;$f<count($this->lineas);$f++)
    {
      echo '<p>'.$this->lineas[$f].'</p>';
    }
  }
}

//CLASSE PIE
class Pie {
  private $titulo;
  public function __construct($tit)
  {
    $this->titulo=$tit;
  }
  public function graficar()
  {
    echo '<h4 style="text-align:left">'.$this->titulo.'</h4>';
  }
}

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
