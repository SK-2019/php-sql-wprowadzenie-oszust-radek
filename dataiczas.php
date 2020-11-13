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
    
    echo("<h2>Wypisz dzisiejszą nazwę dnia po polsku (np. poniedziałek)</h2>");
               $sql1 = "SET lc_time_names = 'pl_PL'";
               $sql2 = "SELECT DATE_FORMAT(CURDATE(), '%W')as data";
              echo("<h3>".$sql2."</h3>");
              $conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
               $result=$conn->query($sql1);
               $result=$conn->query($sql2);
               require("conn.php");
                      echo("<table border=1>");
                      echo("<th>data</th>");
                      
                          while($row=$result->fetch_assoc()) {
                              echo("<tr>");
                                  echo("<td>".$row["data"]."</td>");
                              echo("</tr>");
                          }
                      echo("</table>");

                      
                      echo("<h2>Wyświetl nazwy miesięcy w dacie urodzenia</h2>");
                      $sql = "SELECT *, DATE_FORMAT(data_urodzenia,'%W-%M-%Y') as format FROM pracownicy";
                     echo("<h3>".$sql."</h3>");
                     $conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
                      $result=$conn->query($sql);
                      require("conn.php");
                             echo("<table border=1>");
                             echo("<th>format</th>");
                             
                                 while($row=$result->fetch_assoc()) {
                                     echo("<tr>");
                                         echo("<td>".$row["format"]."</td>");
                                     echo("</tr>");
                                 }
                             echo("</table>");
                      

                             echo("<h2>Obecna, dokładna godzina (z dokładnością do milisekund)</h2>");
                             $sql = "SELECT curtime(4)";
                            echo("<h3>".$sql."</h3>");
                            $conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
                             $result=$conn->query($sql);
                             require("conn.php");
                                    echo("<table border=1>");
                                    echo("<th>curtime(4)</th>");
                                    
                                        while($row=$result->fetch_assoc()) {
                                            echo("<tr>");
                                                echo("<td>".$row["curtime(4)"]."</td>");
                                            echo("</tr>");
                                        }
                                    echo("</table>");

                                    echo("<h2>Wyświetl datę urodzenia w formie: ROK-MIESIĄC-DZIEŃ  (2012-styczeń-poniedziałek)</h2>");
                                        
                                    $sql = "SELECT *, DATE_FORMAT(data_urodzenia,'%Y-%M-%W') as format from pracownicy";
                            echo("<h3>".$sql."</h3>");
                            $conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
                             $result=$conn->query($sql);
                             require("conn.php");
                                    echo("<table border=1>");
                                    echo("<th>data_urodzenia</th>");
                                    
                                        while($row=$result->fetch_assoc()) {
                                            echo("<tr>");
                                                echo("<td>".$row["format"]."</td>");
                                            echo("</tr>");
                                        }
                                    echo("</table>");

                                    
                                    
                                    echo("<h2>Ile godzin, minut już żyjesz</h2>");   
                                    $sql = "SELECT imie,DATEDIFF(CURDATE(),data_urodzenia) as dni, DATEDIFF(CURDATE(),data_urodzenia)*24 as godziny, DATEDIFF(CURDATE(),data_urodzenia)*24*60 as minuty FROM pracownicy";
                            echo("<h3>".$sql."</h3>");
                            $conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
                             $result=$conn->query($sql);
                             require("conn.php");
                                    echo("<table border=1>");
                                    echo("<th>imie</th>");
                                    echo("<th>dni</th>");
                                    echo("<th>godziny</th>");
                                    echo("<th>minuty</th>");
                                    
                                        while($row=$result->fetch_assoc()) {
                                            echo("<tr>");
                                                echo("<td>".$row["imie"]."</td><td>".$row["dni"]."</td><td>".$row["godziny"]."</td><td>".$row["minuty"]."</td>");
                                            echo("</tr>");
                                        }
                                    echo("</table>");
                                    
                                    
                                    echo("<h2>W którym dniu roku urodziłeś się / urodziłaś się</h2>");   
                                    $sql = "SELECT DATE_FORMAT('2003-11-10', '%j') as NrDniaRoku_Urodzenie";
                            echo("<h3>".$sql."</h3>");
                            $conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
                             $result=$conn->query($sql);
                             require("conn.php");
                                    echo("<table border=1>");
                                    echo("<th>NrDniaRoku_Urodzenie</th>");
                                    
                                    
                                        while($row=$result->fetch_assoc()) {
                                            echo("<tr>");
                                                echo("<td>".$row["NrDniaRoku_Urodzenie"]."</td>");
                                            echo("</tr>");
                                        }
                                    echo("</table>");


                                    echo("<h2>Ilu pracowników urodziło się w poniedziałek</h2>");
               $sql1 = "SET lc_time_names = 'pl_PL'";
               $sql2 = "SELECT Count(DATE_FORMAT(data_urodzenia, '%W')) as IloscPracUr_Pon FROM pracownicy where DATE_FORMAT(data_urodzenia, '%W')='Poniedziałek'";
              echo("<h3>".$sql2."</h3>");
              $conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
               $result=$conn->query($sql1);
               $result=$conn->query($sql2);
               require("conn.php");
                      echo("<table border=1>");
                      echo("<th>IloscPracUr_Pon</th>");
                      
                          while($row=$result->fetch_assoc()) {
                              echo("<tr>");
                                  echo("<td>".$row["IloscPracUr_Pon"]."</td>");
                              echo("</tr>");
                          }
                      echo("</table>");

    

  
  ?>
