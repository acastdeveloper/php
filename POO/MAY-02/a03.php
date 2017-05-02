<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Menu {

  private $enlaces=array();

  private $titulos=array();

  private $colorFons = "#663399";

  public function cargarColorFondo($col){
    $this->colorFons = $col;
  }

  public function cargarOpcion($en,$tit)
  {
    $this->enlaces[]=$en;
    $this->titulos[]=$tit;
  }

  public function mostrar()
  {
    echo "<div style='background:$this->colorFons'>";

    for($f=0;$f<count($this->enlaces);$f++)
    {
      echo '<a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
      echo "-";
    }
    echo "</div>";
  }



}

$menu1=new Menu();
$menu1->cargarColorFondo("#0f0");
$menu1->cargarOpcion('http://www.google.com','Google');
$menu1->cargarOpcion('http://www.yahoo.com','Yhahoo');
$menu1->cargarOpcion('http://www.msn.com','MSN');
$menu1->mostrar();
?>
</body>
</html>
