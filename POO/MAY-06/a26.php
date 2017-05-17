<?php

//https://desarrolloweb.com/articulos/2197.php


interface Encendible{
   	public function encender();
   	public function apagar();
}

interface Marxable{
   	public function marxaDalt();
   	public function marxaBaix();
}

class Coche implements Encendible, Marxable{
   	private $gasolina;
   	private $bateria;
   	private $estado = "apagado";

   	function __construct(){
      echo "Coche Instanciat";
      	$this->gasolina = 0;
      	$this->bateria = 5;
   	}

   	public function encender(){
      	if ($this->estado == "apagado"){
         	if ($this->bateria > 0){
            	if ($this->gasolina > 0){
               	$this->estado = "encendido";
               	$this->bateria --;
               	echo "<br><b>Enciendo...</b> estoy encendido!";
            	}else{
               	echo "<br>No tengo gasolina";
            	}
         	}else{
            	echo "<br>No tengo batería";
         	}
      	}else{
         	echo "<br>Ya estaba encendido";
      	}
   	}

   	public function apagar(){
      	if ($this->estado == "encendido"){
         	$this->estado = "apagado";
         	echo "<br><b>Apago...</b> estoy apagado!";
      	}else{
         	echo "<br>Ya estaba apagado";
      	}
   	}

   	public function cargar_gasolina($litros){
      	$this->gasolina += $litros;
      	echo "<br>Cargados $litros litros";
   	}
}








$coche = new Coche();
$coche->cargar_gasolina(1);
for ($i=0; $i <7 ; $i++) {
  $coche->encender();
  $coche->apagar();
}






 ?>
