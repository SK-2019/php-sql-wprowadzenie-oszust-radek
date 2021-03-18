<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/style.css">
    <link rel="icon" href="https://www.favicon.cc/logo3d/308168.png">
    <title>Insert</title>
</head>
<body>
    
</body>
</html>

<?php
echo("<h1>jestes w insert.php </h1>");
echo "<li>Imie: ". $_POST['imie'];
echo "<li>Dzial: ". $_POST['dzial'];
echo "<li>zarobki: ". $_POST['zarobki'];
echo "<li>data urodzenia: ". $_POST['data_urodzenia'];


require_once("../connect.php");
$sql = "INSERT INTO pracownicy (id_pracownicy,imie, dzial, zarobki, data_urodzenia) 
        VALUES (null,'".$_POST['imie']."', ".$_POST['dzial'].", ".$_POST['zarobki'].",'".$_POST['data_urodzenia']."')";

//obsługa błędów zapisu do bazy
if ($conn->query($sql) === TRUE) {
  echo("<li>New record created successfully</li>");
  header('Location: daneDoBazy.php');
} else {
//informacja o ewentualnych błędach
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
