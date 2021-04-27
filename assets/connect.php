<?php

$servername = "mysql-oszust-radek.alwaysdata.net";
$username = "217211";
$password = "Radek003003%";
$dbname = "oszust-radek_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
