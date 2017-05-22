<?php
//1. Require the namespaced file
require("/src/Car/CarIntro.php");
require("/src/Vehicles/Cars/CarIntro.php");


//3 FORMES DE FER SERVIR ELS NAMESPACES, PÀGINA 94 del llibre "THE ESSENTIALS"

// 1A MANERA DE FER-LO SERIA ESCOLLIR QUINA LLIBRERIA UTILITZAR
// use Acme\Car\CarIntro;
//# use Acme\Vehicles\Cars\CarIntro;
//$car = new CarIntro();

///////////////////////////////////

//2A MANERA DE FER-HO SERIA:
// $car = new Acme\Car\CarIntro();
// echo $car->sayHello();
// //////
// $car2 = new Acme\Vehicles\Cars\CarIntro();
// echo $car2->sayHello();



///////////////////////////////////////

//3A Podríem utilitzar àlies
use Acme\Car\CarIntro as Carintro1;
use Acme\Vehicles\Cars\CarIntro as Carintro2;

$car1 = new CarIntro1();
echo $car1->sayHello().'<br>';

$car2 = new CarIntro2();
echo $car2->sayHello().'<hr>';
