<?php

//CLASSE CELDA
class Celda {

private $text;
private $color;
private $fons;

public function __construct($t,$c,$f){
  $this->text =$t;
  $this->color =$c;
  $this->fons =$f;
}

public function getText() {
  return $this->text;
}
public function getColor() {
  return $this->color;
}
public function getFons() {
  return $this->fons;
}


public function mostrarCelda() {
  return '<td style="color:'.$this->color.';background:'.$this->fons.';">'.$this->text.'</td>';




}

}

?>
