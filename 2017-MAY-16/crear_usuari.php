<?php
  include_once('connexio.php');

  // $sql = "SELECT MAX('id') FROM MyGuests";
  $sql = "SELECT MAX('id') FROM MyGuests AS lastindex";

  // if (mysqli_query($conn, $sql)) {
  //     $last_id = mysqli_insert_id($conn);
  // } else {
  //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  // }

echo $sql;



 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Perfil</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

 <form class="w3-container w3-blue" action="update_usuari.php" method="get" style="width:50%;margin:auto;">
   <p><input type="text" name="firstname" value="" placeholder="Nom"></p>
   <p><input type="text" name="lastname" value="" placeholder="Cognom"></p>
   <p><input type="email" name="email" value="" placeholder="email"></p>
   <p><input type="hidden" name="id" value="<?php echo $last_id; ?>" placeholder="email"></p>


   <p>   <input type="submit" name="" value="Enviar">
</p>


 </form>










<a href="03SelectMostrarTaulaLink.php">Tornar a la llista</a>

</body>
</html>
