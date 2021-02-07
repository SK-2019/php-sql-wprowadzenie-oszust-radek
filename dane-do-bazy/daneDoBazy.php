<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="style.css">
  <title>Dane do Bazy</title>
</head>
<body>
	<form action="insert.php" method="POST">
	    	<input type="text" name="imie">
		<input type="number" name="dzial"></br>
		<input type="number" name="zarobki"></br>
		<input type="date" name="data_urodzenia"></br>
	    	<input type="submit">
	</form>

</form>


<h3>usuwanie</h3>
<form action="delete.php" method="POST">
   <input type="number" name="id"></br>
   <input type="submit" value="Usuń pracownika">
</form>


</body>
</html>

<?php

require_once("connect.php");

$sql = ("SELECT id_pracownicy, imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja where dzial=id_org");
$result=$conn->query($sql);
    echo("<table border=1>");
    echo("<th>id_pracownicy</th>");
    echo("<th>imie</th>");
    echo("<th>zarobki</th>");
    echo("<th>data_urodzenia</th>");
    echo("<th>nazwa_dzial</th>");
    echo("<th>usuwanie</th>");


    while($row=$result->fetch_assoc()) {
            echo("<tr>");
                echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["data_urodzenia"]."</td>
