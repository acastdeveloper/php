<!DOCTYPE html>
<html>
<head>
  <title>Matrius multidimensionals</title>
  <style media="screen">
    b {font-size: 2vmax;}
  </style>
</head>
<body>

<?php
$venuts =0;
$cars = array
(  array("Volvo",22,18), array("BMW",15,13), array("Saab",5,2), array("Land Rover",17,15)  );

for ($row = 0; $row < 4; $row++):
  if ($cars[$row][1]>10) : ?>
    <p><b>Row number <?php $row ?></b></p>
    <ul>
        <?php for ($col = 0; $col < 3; $col++) : ?>
        <li><?php echo $cars[$row][$col]; ?></li>
        <?php endfor; ?>
    </ul>
<?php endif;
      $venuts +=  $cars[$row][2];
      endfor;
      echo $venuts." cotxes venuts en total";
?>

</body>
</html>
