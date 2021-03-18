<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="style.css">
	<link rel="icon" href="https://www.favicon.cc/logo3d/308168.png">
  <title>Dane do Bazy</title>
</head>
<body>
	<div class="con">
    <a class="k" href="index.php">Wróć do strony głównej</a>
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


require_once("../assets/connect.php");
$sql = 'SELECT * FROM pracownicy, organizacja where dzial = id_org';
$result = $conn->query($sql) or die($conn->error);
echo("<table border=1>");
echo("<th>id_pracownicy</th>");
echo("<th>imie</th>");
echo("<th>nazwa_dzial</th>");
echo("<th>zarobki</th>");
echo("<th>data_urodzenia</th>");

    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
          echo("<td>".$wiersz["id_pracownicy"]."</td><td>".$wiersz["imie"]."</td><td>".$wiersz["nazwa_dzial"]."</td><td>".$wiersz["zarobki"]."</td><td>".$wiersz["data_urodzenia"]."</td>
		
		<td>
		
		
		<form action='delete.php' method='POST'>
   			<input type='number' name='id' value='".$wiersz['id_pracownicy']."' hidden></br>
   			<input type='submit' value='Usuń'>
		</form>
		
		</td>
		
		");
            echo("</tr>");
        }
echo("</table>");

?>