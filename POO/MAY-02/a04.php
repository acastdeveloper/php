<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class CabeceraPagina {
  private $titulo;
  private $ubicacion;
  public function inicializar($tit,$ubi,$col)
  {
    $this->titulo=$tit;
    $this->ubicacion=$ubi;
    $this->colorText=$col;
  }
  public function graficar()
  {
    echo '<div style="font-size:40px;text-align:'.$this->ubicacion.';color:'.$this->colorText.'">';
    echo $this->titulo;
    echo '</div>';
  }
}

$cabecera=new CabeceraPagina();
$cabecera->inicializar('El blog del programador','left',"#999955");
$cabecera->graficar();
?>
</body>
</html>
