<!DOCTYPE html>
<html>
<head>
    <meta charset-"UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/style.css">
    <link rel="icon" href="https://www.favicon.cc/logo3d/308168.png">
    
  <div class="container">
    <div class="item colorRed">
        <h1 class="title">Radek Oszust</h1>
</div>
<div class="item colorBlue">
    <div class="nav">
        
        <li class="nav_item"><a href="https://github.com/SK-2019/php-sql-wprowadzenie-oszust-radek">Github</a></li>
        <li class="nav_item"><a href="/pracownicy/orgPracownicy.php">Org i Prac</a></li>
        <li class="nav_item"><a href="/pracownicy/pracownicy.php">Pracownicy</a></li>
        <li class="nav_item"><a href="/pracownicy/dataiczas.php">Data i czas</a></li>
        <li class="nav_item"><a href="/dane-do-bazy/strona.php">Strona</a></li>
        <li class="nav_item"><a href="/dane-do-bazy/formularz.html">Formularz</a></li>
        <li class="nav_item"><a href="/dane-do-bazy/daneDoBazy.html">Insert</a></li>
</div>
<div class="item colorGreen"></div>
</div>
   
</head>
<body>

  <?php
    echo("<h1>agregat.php</h1>");
    echo("<h2>Suma zarobkow wszystkich pracownikow</h2>");
    require_once("connect.php");
 $sql = "SELECT sum(zarobki) as sum FROM pracownicy, organizacja WHERE (dzial = id_org)";
echo("<h3>".$sql."</h3>");
$conn = new mysqli("mysql-oszust-radek.alwaysdata.net","217211","Radek003003%","oszust-radek_db");
 $result=$conn->query($sql);
        echo("<table border=1>");
     
        echo("<th>sum</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["sum"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
 
 echo("<h2>Suma zarobkow wszystkich kobiet</h2>");
 $sql = "SELECT sum(zarobki) as sum FROM pracownicy, organizacja WHERE (dzial = id_org) and (imie like 'a%')";
echo("<h3>".$sql."</h3>");
$conn = new mysqli("mysql-oszust-radek.alwaysdata.net","217211","Radek003003%","oszust-radek_db");
 $result=$conn->query($sql);
        echo("<table border=1>");
     
        echo("<th>sum</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["sum"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
 
 echo("<h2>Suma zarobkow mezczyzn pracujacych w dziale 2 i 3</h2>");
 $sql = "SELECT sum(zarobki) as sum FROM pracownicy, organizacja WHERE (dzial = id_org and imie not like 'a%') and (dzial = 2 or dzial = 3)";
echo("<h3>".$sql."</h3>");
$conn = new mysqli("mysql-oszust-radek.alwaysdata.net","217211","Radek003003%","oszust-radek_db");
 $result=$conn->query($sql);
        echo("<table border=1>");
     
        echo("<th>sum</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["sum"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
  ?>
    
</body>
</html>

