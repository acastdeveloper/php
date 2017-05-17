

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


  <?php
  include_once('connexio.php');



  if ($_SERVER['REQUEST_METHOD']== 'POST') {
    // echo "és de tipus Post";

    $sql = "UPDATE MyGuests SET firstname='".$_POST['firstname']."', lastname='".$_POST['lastname']."', email='".$_POST['email']."' WHERE id=".$_POST['id'];

  // echo $sql;
  // echo "<br>s'ha enviat per post<br>";

  if ($conn->query($sql)=== TRUE) {

  //La funció aquesta $conn->query($sql)
  //a més de comparar executa.
  //De fet el que fa és executar la query i retorna
  //un valor.

    echo "Record updated succesfully";
  }
    echo "Error updating record".$conn->error;
  }

  else {

  $i=$_GET['id'];

  $sql = "SELECT * FROM MyGuests WHERE id = ".$_GET["id"]. " LIMIT 1";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  ?>


  <div class="w3-card-4" style="width:50%;margin:auto;">

  <header class="w3-container w3-blue">
    <h1><?php  //echo $row["firstname"].' '.$row["lastname"]; ?>Editing user</h1>
  </header>

  <div class="w3-container">
    <p><?php  //echo $row["email"]; ?></p>
  </div>

  <footer class="w3-container w3-blue">
    <h5><?php  //echo $row["reg_date"]; ?></h5>
  </footer>

</div>

 <form class="w3-container w3-blue" action="update_usuari.php" method="post" style="width:50%;margin:auto;">
   <p><input type="text" name="firstname" value="<?php  echo $row["firstname"] ?>" placeholder="Nom"></p>
   <p><input type="text" name="lastname" value="<?php echo $row["lastname"]; ?>" placeholder="Cognom"></p>
   <p><input type="email" name="email" value="<?php echo $row["email"]; ?>" placeholder="email"></p>
  <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">

   <p>   <input type="submit" name="" value="Enviar">
</p>


 </form>








<?php
}


$conn->close();
 ?>


<a href="03SelectMostrarTaulaLink.php">Tornar a la llista</a>

</body>
</html>
