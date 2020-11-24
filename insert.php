<?php

echo("jestes w insert.php");
echo "<li>". $_POST['name'];
echo "<li>". $_POST['dzial'];
echo "<li>". $_POST['zarobki'];
echo "<li>". $_POST['data_urodzenia'];




$conn = new mysqli("mysql-oszust-radek.alwaysdata.net","217211","Radek003003%","oszust-radek_db");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pracownicy (id_pracownicy,imie, dzial, zarobki, data_urodzenia) 
       VALUES (null,'".$_POST['name']."', ".$_POST['dzial'].", ".$_POST['zarobki'].",'".$_POST['data_urodzenia']."')";


echo "<li>". $sql;

if ($conn->query($sql) === TRUE) {
  echo ("New record created successfully");
} else {
//informacja o ewentualnych błędach
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
      

  
?>

