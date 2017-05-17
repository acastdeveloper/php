<?php
include_once('connexio.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Representar un Select per pantalla</title>

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>



  <?php
  //CONSULTA AMB SELECT
  $sql = "SELECT id, firstname, lastname FROM MyGuests";
  $result = $conn->query($sql);

  if ($result->num_rows > 0):
  ?>

<table class="w3-table w3-striped w3-hoverable	" ><tr><th>ID</th><th>Name</th><th>Last Name</th></tr>


<?php
      // output data of each row
  while($row = $result->fetch_assoc()): ?>
  <tr><td><a href="03_cardprofile.php?id=<?php echo $row["id"] ?>" target="nova"><?php echo $row["id"] ?></a></td>
    <td><?php echo $row["firstname"]; ?></td>
    <td><?php  echo $row["lastname"]?></td>
    <td><a href="update_usuari.php?id=<?php echo $row["id"] ?>" class="fa fa-pencil" style="text-decoration:none;"></a></td>
    <td><form class="" action="delete.php?id=<?php echo $row["id"] ?>" method="post">
      <input type="submit" name="delete" value="X" onclick="confirm('Estàs segur?')">
    </form></td>
  </tr>
<?php endwhile; ?>
</table>
<?php
  else:
      echo "0 results";
  endif;
  $conn->close();



  ?>

<div class="w3-card w3-blue" style="margin:auto;width:50%;padding:5px;">
   <p><a href="crear_usuari.php" class="fa fa-user-plus" style="text-decoration:none;"> Usuari Nou</a></p>
</div>

</body>
</html>
