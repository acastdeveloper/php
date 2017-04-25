<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exemple01</title>
</head>
<body>
  <?php
  /* Per escriure */
  echo "My first PHP script!";

  /* Escriure una variable*/
  $a = "Hola";
  echo $a;



  ?>

<hr>
<?php
//

$x = 5;
$y = 10;

function myTest() {
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; // outputs 15
?>

</body>
</html>
