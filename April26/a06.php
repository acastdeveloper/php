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



<?php $n = 3; ?>

<table class="w3-table w3-striped">
<caption>Taula del <?php echo $n ?></caption>

<?php for ($z=0; $z <= 10;$z *= 1.1):
$res2 = $n * $z; ?>
  <tr>
    <td>
      <?php echo "$n x $z = $res2"; ?></td>
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
