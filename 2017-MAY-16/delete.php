<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Missatge</title>
</head>
<body>

  <?php
  include_once('connexio.php');

  $i=$_GET['id'];
  // echo $i;

  $sql = "DELETE FROM MyGuests WHERE id = ".$_GET["id"];
  $result = $conn->query($sql);
  // $row = $result->fetch_assoc();

  if ($conn->query($sql) === TRUE) {
      echo "Registre esborrat correctament";
      echo "<br><a href='03SelectMostrarTaulaLink.php'>Tornar</a>";
      header('Location: 03SelectMostrarTaulaLink.php');
  } else {
      header('Location: 03SelectMostrarTaulaLink.php');
  }




  $conn->close();
  ?>

  

</body>
</html>
