<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
/**
 *
 */
class Cuadrado
{
  private $costat;
  private $perimetre;
  private $area;

  public function __construct($c)
  {
    $this->costat = $c;
    $this->perimetre = 4*$c;
    $this->area = pow($c,2);
  }

  public function setCostat($c) {
    $this->__construct($c);
  }

  public  function getCostat() {
    return "Costat: ".$this->costat;
  }


  public  function getPerimetre() {
    return "Perímetre: ".$this->perimetre;
  }
  public  function getArea() {
    return "Àrea: ".$this->area;
  }

}

//ORIGINAL
echo "<strong>Original</strong><br>";
$quadrado = new Cuadrado(3);
echo $quadrado->getCostat()."<br>";
echo $quadrado->getPerimetre()."<br>";
echo $quadrado->getArea()."<br><hr>";

//CÒPIA PER REFERÈNCIA
echo "<strong>Còpia per referència</strong><br>";
$quadrado2 = $quadrado;
echo $quadrado2->getCostat()."<br>";
echo $quadrado2->getPerimetre()."<br>";
echo $quadrado2->getArea()."<br><hr>";

//CÒPIA PER VALOR
echo "<strong>Còpia per valor</strong><br>";
$quadrado3 = clone($quadrado);
$quadrado3->setCostat(8);
echo $quadrado3->getCostat()."<br>";
echo $quadrado3->getPerimetre()."<br>";
echo $quadrado3->getArea()."<br><hr>";



?>


PROPOSTA FER UNA CLASSE ABSTRACTA QUE SERVEIXI PER CALCULAR ÀREES, PERÍMETRES D'ALTRES FIGURES.



</body>
</html>
