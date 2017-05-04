<html>
<head>
<title>Pruebas</title>
</head>
<body>
<!-- Otra posibilidad que nos presenta el lenguaje PHP es pasar parámetros
no solo de tipo primitivo (enteros, reales, cadenas etc.) sino parámetros de
tipo objeto.

Vamos a desarrollar un problema que utilice esta característica. Plantearemos
una clase Opcion y otra clase Menu. La clase Opcion definirá como atributos el
titulo, enlace y color de fondo, los métodos a implementar serán el constructor
y el graficar.

Por otro lado la clase Menu administrará un array de objetos de la clase Opcion
e implementará un métodos para insertar objetos de la clase Menu y otro para
graficar. Al constructor de la clase Menu se le indicará si queremos el menú
en forma 'horizontal' o 'vertical'.

El código fuente de las dos clases es (pagina1.php): -->





<?php

//INICI DE CLASSE OPCION ---------------------------------------------------
class Opcion {
  private $titulo;
  private $enlace;
  private $colorFondo;
  public function __construct($tit,$enl,$cfon)
  {
    $this->titulo=$tit;
    $this->enlace=$enl;
    $this->colorFondo=$cfon;
  }



  public function graficar()
  {
    echo '<a style="background-color:'.$this->colorFondo.
         '" href="'.$this->enlace.'">'.$this->titulo.'</a>';
  }
}
//FINAL DE CLASSE OPCION ---------------------------------------------------



//INICI DE CLASSE MENU ---------------------------------------------------
class Menu {
  private $opciones=array();
  private $direccion;
  public function __construct($dir)
  {
    $this->direccion=$dir;
  }
  public function insertar($op)
  {
    // aBANS DE FER LA INSERCIÓ COMPROVEM QUE NO HI HAGI CAP ALTRE ELEMENT
    //AMB EL MATEIX TÍTOL

    $this->opciones[]=$op;
    foreach($this->opciones as $opcio){
    }


  }

  private function graficarHorizontal()
  {
    for($f=0;$f<count($this->opciones);$f++)
    {
      $this->opciones[$f]->graficar();
    }
  }
  private function graficarVertical()
  {
    for($f=0;$f<count($this->opciones);$f++)
    {
      $this->opciones[$f]->graficar();
      echo '<br>';
    }
  }
  public function graficar()
  {
    if (strtolower($this->direccion)=="horizontal")
      $this->graficarHorizontal();
    else
      if (strtolower($this->direccion)=="vertical")
        $this->graficarVertical();
  }
}
//FINAL DE CLASSE OPCION



$menu1=new Menu('horizontal');
$opcion1=new Opcion('Google','http://www.google.com','#C3D9FF');
$menu1->insertar($opcion1);
$opcion2=new Opcion('Yahoo','http://www.yahoo.com','#CDEB8B');
$menu1->insertar($opcion2);
$opcion3=new Opcion('MSN','http://www.msn.com','#C3D9FF');
$menu1->insertar($opcion3);
$menu1->graficar();
?>
</body>
</html>
