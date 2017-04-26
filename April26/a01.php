<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
Exercici: Dividir una cadena en un array amb 2 elements que siguin d'igual longitud.

<?php

$cadena = "Supercalifragilísticoespialidoso";
$cadlong = strlen($cadena);

$cadena1 = substr($cadena,0,$cadlong/2);
$cadena2 = substr($cadena,$cadlong/2);

$resultat = $cadena1." ".$cadena2;



echo $resultat;




?>



</body>
</html>
