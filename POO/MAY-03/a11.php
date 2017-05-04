<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php

include(a11_celda.php);

class Tabla {
  private $mat=array();
  private $cantFilas;
  private $cantColumnas;

  public function __construct($fi,$co)
  {
    $this->cantFilas=$fi;
    $this->cantColumnas=$co;
  }
  public function cargar($fila,$columna,$celda)
  {
    $this->mat[$fila][$columna]=$celda;
  }
  private function inicioTabla()
  {
    echo '<table border="1">';
  }

  private function inicioFila()
  {
    echo '<tr>';
  }
  private function mostrar($fi,$co)
  {
    // echo '<td>'.$this->mat[$fi][$co].'</td>';
    echo $this->mat[$fi][$co]->mostrarCelda();

    }
  private function finFila()
  {
    echo '</tr>';
  }
  private function finTabla()
  {
    echo '</table>';
  }
  public function graficar()
  {
    $this->inicioTabla();
    for($f=1;$f<=$this->cantFilas;$f++)
    {
      $this->inicioFila();
      for($c=1;$c<=$this->cantColumnas;$c++)
      {
        $this->mostrar($f,$c);
      }
      $this->finFila();
    }
    $this->finTabla();
  }
}
$fils = 6;
$cols = 8;
$contador = 1;
$tabla1=new Tabla($fils,$cols);
for($f=1; $f<=$fils; $f++){
  for($c=1; $c<=$cols; $c++){
    $celda = new Celda($contador, "#Fc0","#ccc");
    $tabla1->cargar($f, $c, $celda);
    $contador++;
  }
}
$tabla1->graficar();

?>
</body>
</html>
