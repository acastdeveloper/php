<!DOCTYPE html>
<html>
<body>

<?php
$venuts =0;
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );

for ($row = 0; $row < 4; $row++) {
if ($cars[$row][1]>10) {

        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
          echo "<li>".$cars[$row][$col]."</li>";

        }
        echo "</ul>";

      }

$venuts +=  $cars[$row][2];

}

  echo $venuts." cotxes venuts en total";
?>

</body>
</html>
