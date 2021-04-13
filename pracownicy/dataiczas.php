<!DOCTYPE html>
<html>
<head>
    <meta charset-"UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assests/style.css">
    <link rel="icon" href="https://www.favicon.cc/logo3d/308168.png">
    
    <div class="container">
    <div class="item colorRed">
        <h1 class="title">Radek Oszust</h1>
</div>
<div class="item colorBlue">
    <div class="nav">
        
        <li class="nav_item"><a href="https://github.com/SK-2019/php-sql-wprowadzenie-oszust-radek">Github</a></li>
        <li class="nav_item"><a href="/pracownicy/orgPracownicy.php">Org i Prac</a></li>
        <li class="nav_item"><a href="/pracownicy/agregat.php">F. agregujace</a></li>
        <li class="nav_item"><a href="/pracownicy/pracownicy.php">Pracownicy</a></li>
        <li class="nav_item"><a href="/dane-do-bazy/strona.php">Strona</a></li>
        <li class="nav_item"><a href="/dane-do-bazy/formularz.html">Formularz</a></li>
        <li class="nav_item"><a href="/dane-do-bazy/daneDoBazy.html">Insert</a></li>
        
</div>
<div class="item colorGreen"></div>

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
 $sql = "SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy, organizacja WHERE (dzial = id_org) and dzial=1";
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
    
    echo("</table>");
           require("connect.php");
           $sql='SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy, organizacja WHERE dzial=id_org AND nazwa_dzial="handel"';
           echo("<h2>Zad4: $sql</h2>");
           $result = $conn->query($sql);
               echo("<table border>");
               echo("<th>Wiek_pracowników_handel</th>");
                   while($row=$result->fetch_assoc()){ 
                       echo("<tr>");
                       echo("<td>".$row["wiek"]."</td>");                    
                       echo("</tr>");
                  }
          echo("</table>");
          require("connect.php");
          $sql='SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy WHERE imie like "%a"';
          echo("<h2>Zad5: $sql</h2>");
          $result = $conn->query($sql);
              echo("<table border>");
              echo("<th>Wiek_kobiet</th>");
                  while($row=$result->fetch_assoc()){ 
                      echo("<tr>");
                      echo("<td>".$row["wiek"]."</td>");                    
                      echo("</tr>");
                 }
         echo("</table>");

          require("connect.php");
          $sql='SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy WHERE imie not like "%a"';
          echo("<h2>Zad6: $sql</h2>");
          $result = $conn->query($sql);
              echo("<table border>");
              echo("<th>Wiek_mężczyzn</th>");
                  while($row=$result->fetch_assoc()){ 
                      echo("<tr>");
                      echo("<td>".$row["wiek"]."</td>");                    
                      echo("</tr>");
                 }
         echo("</table>");

        require("connect.php");
        $sql='SELECT dzial, avg(YEAR(CURDATE()) - YEAR(data_urodzenia)) as a, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial';
          echo("<h2>Zad7: $sql</h2>");
          $result = $conn->query($sql);
              echo("<table border>");
              echo("<th>Wiek_mężczyzn</th>");
              echo("<th>Średnia_wiek</th>");
              echo("<th>Nazwa_działu</th>");
                  while($row=$result->fetch_assoc()){ 
                      echo("<tr>");
                      echo("<td>".$row["dzial"]."</td><td>".$row["a"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                      echo("</tr>");
                 }
         echo("</table>");

         require("connect.php");
         $sql='SELECT dzial, sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial';
           echo("<h2>Zad8: $sql</h2>");
           $result = $conn->query($sql);
               echo("<table border>");
               echo("<th>Dział</th>");
               echo("<th>Suma_wiek</th>");
               echo("<th>Nazwa_działu</th>");
                   while($row=$result->fetch_assoc()){ 
                       echo("<tr>");
                       echo("<td>".$row["dzial"]."</td><td>".$row["suma"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                       echo("</tr>");
                  }
          echo("</table>");
  


             require("connect.php");
             $sql = ("SELECT *, DATE_FORMAT(data_urodzenia,'%W-%m-%Y') as format from pracownicy");
             echo("<h2>Zad1: $sql</h2>");
             $result=$conn->query($sql);
             include("connect.php");
                     echo("<table border=1>");
                     echo("<th>Id_pracownicy</th>");
                     echo("<th>Imie</th>");
                     echo("<th>Dział</th>");
                     echo("<th>Zarobki</th>");
                     echo("<th>Data_urodzenia</th>");
                     echo("<th>Nazwa_działu</th>");
                     while($row=$result->fetch_assoc()) {
                             echo("<tr>");
                                 echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["format"]."</td>");
                             echo("</tr>");
                         }
                     echo("</table>");


             require("connect.php");
             $sql1 = ("SET lc_time_names = 'pl_PL'");
             $sql2 = ("SELECT DATE_FORMAT(CURDATE(), '%W')as data");
             echo("<h2>Zad2: $sql2</h2>");
             $result=$conn->query($sql1);
             $result=$conn->query($sql2);

             include("connect.php");
                     echo("<table border=1>");
                     echo("<th>Data</th>");
                     while($row=$result->fetch_assoc()) {
                             echo("<tr>");
                                 echo("<td>".$row["data"]."</td>");
                             echo("</tr>");
                         }
                     echo("</table>");


             require("connect.php");
             $sql1 = ("SET lc_time_names = 'pl_PL'");
             $sql2 = ("SELECT *, DATE_FORMAT(data_urodzenia,'%M-%W-%Y') as format from pracownicy");
             echo("<h2>Zad3: $sql2</h2>");
             $result=$conn->query($sql);
             include("connect.php");
                     echo("<table border=1>");
                     echo("<th>Id_pracownicy</th>");
                     echo("<th>Imie</th>");
                     echo("<th>Dział</th>");
                     echo("<th>Zarobki</th>");
                     echo("<th>Data_urodzenia</th>");
                     echo("<th>Format</th>");
                     while($row=$result->fetch_assoc()) {
                             echo("<tr>");
                                 echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["format"]."</td>");
                             echo("</tr>");
                         }
                     echo("</table>");


            require("connect.php");
            $sql2 = ("SELECT curtime(4)");
            echo("<h2>Zad4: $sql2</h2>");
            $result=$conn->query($sql2);
            include("connect.php");
                      echo("<table border=1>");
                     echo("<th>Curtime(4)</th>");
                     while($row=$result->fetch_assoc()) {
                            echo("<tr>");
                                  echo("<td>".$row["curtime(4)"]."</td>");
                            echo("</tr>");
                            }
                         echo("</table>");

                         
            require("connect.php");
            $sql1 = ("SET lc_time_names = 'pl_PL'");
            $sql2 = ("SELECT *, DATE_FORMAT(data_urodzenia,'%Y-%M-%W') as format from pracownicy");
            echo("<h2>Zad5: $sql2</h2>");
            $result=$conn->query($sql1);
            $result=$conn->query($sql2);                
            include("connect.php");
                    echo("<table border=1>");
                    echo("<th>Id_pracownicy</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dział</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_urodzenia</th>");
                    echo("<th>Format</th>");
                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["format"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");

  
  ?>
