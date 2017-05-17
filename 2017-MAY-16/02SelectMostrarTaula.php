<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Representar un Select per pantalla</title>

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>


  <?php
  $servername = "mysql-testingmultiverse.alwaysdata.net";
  $username = "137656";
  $password = "mepica1web";
  $dbname = "testingmultiverse_dummy";


  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }


  //CONSULTA AMB SELECT
  $sql = "SELECT id, firstname, lastname FROM MyGuests";
  $result = $conn->query($sql);

  if ($result->num_rows > 0):
  ?>

<table class="w3-table w3-striped w3-hoverable	" ><tr><th>ID</th><th>Name</th><th>Last Name</th></tr>


<?php
      // output data of each row
  while($row = $result->fetch_assoc()): ?>
  <tr><td><?php echo $row["id"] ?></td>
    <td><?php echo $row["firstname"]; ?></td>
    <td><?php  echo $row["lastname"]?></td>
  </tr> 
<?php endwhile; ?>
</table>
<?php
  else:
      echo "0 results";
  endif;
  $conn->close();



  ?>



</body>
</html>
