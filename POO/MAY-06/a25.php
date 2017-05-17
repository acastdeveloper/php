<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
 <h1>Problema</h1>
<p>Plantear una clase Calculadora que contenga cuatro métodos estáticos (sumar, restar, multiplicar y dividir) estos métodos reciben dos valores.</p>

<?php
class Calculadora {

  // VARIABLE DE CLASSE
  public static $comptador = 0;
  // És una variable de classe, i no pas de l'objecte que la instanciï. És a dir, és una variable compartida per tots els objectes que pertanyin en aquesta classe.





  public static function sumar($x,$y) {
    return $x+$y;
  }
  public static function restar($x,$y) {
    return $x-$y;
  }
  public static function multiplicar($x,$y) {
    return $x*$y;
  }
  public static function dividir($x,$y) {
    return $x/$y;
  }


    /**
     * Get the value of Comptador
     *
     * @return mixed
     */
    public function getComptador()
    {
        return $this->comptador;
    }

    /**
     * Set the value of Comptador
     *
     * @param mixed comptador
     *
     * @return self
     */
    public function setComptador($comptador)
    {
        $this->comptador = $comptador++;

        return $this;
    }

}

echo "Sumar:".Calculadora::sumar(2,3);
echo "<br>";
echo "Restar:".Calculadora::restar(2,3);
echo "<br>";
echo "Multiplicar:".Calculadora::multiplicar(2,3);
echo "<br>";
echo "Dividir:".Calculadora::dividir(2,3);
echo "<br>";

//"VARIABLE DE CLASSE"
echo Calculadora::$comptador;

// $calc1 =new Calculadora();
// echo $calc1 ->getComptador();


//ACABAR QUE NO XUTA


 ?>


</body>
</html>
