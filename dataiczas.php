<!DOCTYPE html>
<html>
<head>
    <meta charset-"UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <div class="nav"> 
    <h2>linki</h2>
        <h3>
    <a href="https://php-oszust-radek.herokuapp.com/"><b>Str Glowna</b></a>
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-oszust-radek"><b>Github | </b></a>
    <a href="agregat.php"><b>F. agregujace | </b></a>
    <a href="orgPracownicy.php"><b>Org i Prac | </b></a>
    <a href="pracownicy.php"><b>Pracownicy</b></a>
    <a href="dataiczas.php"><b>Data i czas</b></a>
        </h3>
</div>    
</head>
<body>

<?php

echo("<h2>Zad1</h2>");
 $sql = "SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy, organizacja WHERE (dzial = id_org)";
echo("<h3>".$sql."</h3>");
$conn = new mysqli("mysql-oszust-radek.alwaysdata.net","217211","Radek003003%","oszust-radek_db");
 $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>imie</th>");
        echo("<th>wiek</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["imie"]."</td><td>".$row["wiek"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
    
    echo("<h2>Zad2</h2>");
 $sql = "SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy, organizacja WHERE (dzial = id_org) and (nazwa_dzial=serwis)";
echo("<h3>".$sql."</h3>");
$conn = new mysqli("mysql-oszust-radek.alwaysdata.net","217211","Radek003003%","oszust-radek_db");
 $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>imie</th>");
        echo("<th>wiek</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["imie"]."</td><td>".$row["wiek"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
  
  ?>
