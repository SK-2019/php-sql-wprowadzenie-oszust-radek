<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/assets/style.css">
        <link rel="icon" href="https://www.favicon.cc/logo3d/308168.png">
    </head>
<body>

<div class="item colorBlue">
<?php include("../assets/header.php"); ?>
</div>
<div class="item colorBlue">
    <div class="nav">
        
       <?php include("../assets/menu.php"); ?>
   
</div>
</div>
<div class="item colorGreen"></div>

<div class="con">

<?php

    require_once("../assets/connect.php");
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
    </div>
</body>
</html>
