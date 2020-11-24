<?php
require_once("connect.php");

$conn = new mysqli("mysql-oszust-radek.alwaysdata.net","217211","Radek003003%","oszust-radek_db");

  $sql = "INSERT INTO Pracownik (id, imie, dzial, zarobki,data_urodzenia) 
       VALUES (null,'Balbina', 4, 86,'1999-05-21')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {

  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
      

  
    ?>

