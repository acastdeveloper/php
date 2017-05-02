<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
//http://www.tutorialesprogramacionya.com/phpya/poo/temarios/descripcion.php?cod=36&punto=2&inicio=0

class Persona {
  private $nombre;
  public $edad;

  public function inicializar($name,$age)
  {
    $this->nombre=$name;
    $this->edad=$age;
  }
  public function imprimir()
  {
    echo $this->nombre;
    echo " ";
    echo $this->edad;
    echo '<br>';
  }
}


$persones = array();

$per1=new Persona();
$per1->inicializar('Juan',28);
//$per1->imprimir();
//array_push($persones,$per1->edad);
array_push($persones,$per1);

$per2=new Persona();
$per2->inicializar('Ana',27);
//$per2->imprimir();
//array_push($persones,$per2->edad);
array_push($persones,$per2);


$edatTotal=0;
//echo array_sum($persones);
foreach($persones as $valor) {
  $edatTotal += $valor->edad;
}
echo $edatTotal;

echo("<br>");
print_r($persones);










?>
</body>
</html>
