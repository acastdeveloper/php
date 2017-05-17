<?php
include_once('connexio.php');
// $i=$HTTP_GET_VARS["id"];
$i=$_GET['id'];
// echo $i;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Perfil d'usuari</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>
<body>



  <?php
  //CONSULTA AMB SELECT
  // $sql = "SELECT id, firstname, lastname, email, regdate FROM MyGuests";
  $sql = "SELECT * FROM MyGuests WHERE id = ".$_GET["id"]. " LIMIT 1";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  ?>

 
  <div class="w3-card-4" style="width:50%;margin:auto;">

  <header class="w3-container w3-blue">
    <a href="update_usuari.php?id=<?php echo $_GET["id"] ?>" class="fa fa-pencil fa-2x" style="text-decoration:none;color:white;"></a>
    <h1><?php  echo $row["firstname"].' '.$row["lastname"]; ?></h1>
  </header>

  <div class="w3-container">
    <p><?php  echo $row["email"]; ?></p>
  </div>

  <footer class="w3-container w3-blue">
    <h5><?php  echo $row["reg_date"]; ?></h5>
  </footer>











  </div>








<?php $conn->close();
 ?>
</body>
</html>
