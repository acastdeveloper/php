 <?php
 $a = $_REQUEST['v1'];
 $b = $_REQUEST['v2'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field

    if (empty($a) or empty($b)) {
        $missatge = "No has ompert algun camp ";
    } else {
        $missatge = ($a + $b);
    }
}
?>


<html>
<body>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  valor1: <input type="number" name="v1" required="true" value="<?php echo $a; ?>"><br>
  valor2: <input type="number" name="v2" required="true" value="<?php echo $b; ?>">
  <input type="submit">
</form>

<?php echo $missatge;
 ?>

</body>
</html>
