<?php

require_once("../assets/connect.php");


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE  FROM pracownicy WHERE id_pracownicy= '".$_POST['id']."';";

echo $sql;



if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();

header("location: https://php-oszust-radek.herokuapp.com/daneDoBazy.php");
?>
