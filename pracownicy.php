<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <h2>linki</h2>
<h3>
    <a href="https://php-oszust-radek.herokuapp.com/"><b>Str Glowna</b></a>
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-oszust-radek"><b>Github | </b></a>
    <a href="agregat.php"><b>F. agregujace | </b></a>
    <a href="orgPracownicy.php"><b>Org i Prac | </b></a>
    <a href="pracownicy.php"><b>Pracownicy</b></a>
    <a href="dataiczas.php">Data i czas</b></a>
</h3>
<h1>Radek Oszust</h1>
<hr>

<?php

    require("connect.php");
    echo("<h2>ZADANIE 1: SELECT * FROM pracownicy, organizacja WHERE dzial=2</h2>");
    $result = $conn->query('SELECT * FROM pracownicy, organizacja WHERE dzial=2');
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");
    require("connect.php");
    echo("<h2>ZADANIE 2: SELECT * FROM pracownicy, organizacja where (dzial=1 or dzial=2)</h2>");  
    $result = $conn->query('SELECT * FROM pracownicy, organizacja where (dzial=1 or dzial=2)'); 
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Dział</th>");
    echo("<th>Nazwa_Działu</th>");
        while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
            echo("</tr>");
            }
    

        echo("</table>");
    require("connect.php");
    echo("<h2>ZADANIE 3: SELECT * FROM pracownicy, organizacja WHERE zarobki<30</h2>");  
    $result = $conn->query('SELECT * FROM pracownicy, organizacja WHERE zarobki<30'); 
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

?>
    
</body>
</html>
