<?php

// DB credentials.
define('DB_HOST','mysql-testingmultiverse.alwaysdata.net');
define('DB_USER','137656');
define('DB_PASS','mepica1web');
define('DB_NAME','testingmultiverse_abm');
// Establish database connection.

//SISTEMA D'EXCEPCIONS
try
{
    $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,
    DB_USER, DB_PASS,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

    $sql = "SELECT * FROM usuarios WHERE clave = :clave";
    $query = $dbh->prepare($sql);
    $clave ="0123456789";
    $query->bindParam(':clave',$clave,PDO::PARAM_STR);
    $query->execute();
    $results =$query->fetchAll(PDO::FETCH_OBJ);
    print_r($results);
    echo '<hr>';
    if($query->rowCount()>0) {
      //rowCount()és una propietat de l'objecte generat un cop s'ha executat la query.
      foreach ($results as $result) {
        echo $result->nombre.", ";
        echo $result->apellido.", ";
        echo $result->clave."<hr>";
      }
    }

    //Si fes PDO::FETCH_ARRAY la manera de cridar les columnes serien:$result['nombre'], $result['apellido'],...


  //AIXÒ ÉS LA MATEIXA QUERY AMB NOUS PARÀMETRES
  $clave ="jacaranda";
  $query->execute();
  $results =$query->fetchAll(PDO::FETCH_OBJ);
  if($query->rowCount()>0) {
    //rowCount()és una propietat de l'objecte generat un cop s'ha executat la query.
    foreach ($results as $result) {
      echo $result->nombre.", ";
      echo $result->apellido.", ";
      echo $result->clave."<hr>";
    }
  }



}
catch (PDOException $e)
{
    exit("<strong>Error:</strong> " . $e->getMessage());
}







 ?>
