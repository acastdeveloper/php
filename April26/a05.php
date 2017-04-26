<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TAULA DEL 7</title>
    <style media="screen">
      /*body {font-family: monospace;}
      table { border: 1px grey solid;
        border-collapse: collapse;}
      td {padding:5px;}
      tr:nth-child(even) td {        background: #eaeaea;
      }*/
    </style>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  </head>
  <body>

<h1>TAULA DEL 7</h1>

<?php

 for ($x=0; $x <= 10; $x++) {
   $resultat = 7 * $x;
   echo "7 x $x = $resultat <br>";
 }

?>
<hr>

<table class="w3-table w3-striped">
<?php
for ($y=0; $y <= 10;$y++) {
  $res = 7 * $y;
  ?>
<tr><td>

<?php    echo "7 x $y = $res";
 ?>

</td></tr>
  <?php } ?>
</table>


<hr>



<table class="w3-table w3-striped">
<?php for ($z=0; $z <= 10;$z++):
$res2 = 7 * $z; ?>
  <tr>
    <td>
      <?php echo "7 x $z = $res2"; ?></td>
    <td>
      <?php if($res2 % 2 == 0) : ?>
        És parell
      <?php else: ?>
        És senar
      <?php endif ?>
    </td>
  </tr>
<?php endfor; ?>
</table>








  </body>
</html>
