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

?>
