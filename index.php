<!DOCTYPE html>
<html>
<head>
    <meta charset-"UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://www.favicon.cc/logo3d/308168.png">
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
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
        <li class="nav_item"><a href="/pracownicy/dataiczas.php">Data i czas</a></li>
        <li class="nav_item"><a href="flexbox/flexbox.html">Flexbox</a></li>
        <li class="nav_item"><a href="/dane-do-bazy/strona.php">Strona</a></li>
        <li class="nav_item"><a href="/dane-do-bazy/formularz.html">Formularz</a></li>
        <li class="nav_item"><a href="/dane-do-bazy/daneDoBazy.html">Insert</a></li>
       
</div>
<div class="item colorGreen"></div>
</div>

        <?php
        $d=strtotime("now");
        echo "<li>".date("Y-m-d h:i:sa", $d) . "<br>";
            echo("<h1>Radek Oszust</h1>");
            require_once("assets/connect.php");

            echo("<h2>Zad1</h2>");
            echo("<h3>SELECT count(imie) as kjl, dzial, nazwa_dzial FROM pracownicy, organizacja where dzial=id_org group by dzial</h3>");
            $result=$conn->query('SELECT count(imie) as kjl, dzial, nazwa_dzial FROM pracownicy, organizacja where dzial=id_org group by dzial');
            echo("<table border=1>");
            echo("<th>count(imie)</th>");
            echo("<th>dzial</th>");
            echo("<th>nazwa_dzial</th>");
           
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row["kjl"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
                        echo("</tr>");
                }
                    echo("</table>");

            echo("<h2>Zad2</h2>");
            echo("<h3>SELECT * FROM pracownicy where dzial=1</h3>");
    
            $result=$conn->query('SELECT * FROM pracownicy where dzial=1');
            echo("<table border=1>");
            echo("<th>id</th>");
            echo("<th>imie</th>");
            echo("<th>dzial</th>");
            echo("<th>zarobki</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                        echo("</tr>");
                }
                    echo("</table>");

            echo("<h2>Zad3</h2>");
            echo("<h3>SELECT * FROM pracownicy where imie not like '%a'</h3>");
            
            $result=$conn->query('SELECT * FROM pracownicy where imie not like "%a"');
            echo("<table border=1>");
            echo("<th>id</th>");
            echo("<th>imie</th>");
            echo("<th>dzial</th>");
            echo("<th>zarobki</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                        echo("</tr>");
                }
                    echo("</table>");

            echo("<h2>Zad4</h2>");
            echo("<h3>SELECT * FROM pracownicy where zarobki>30</h3>");
            
            $result=$conn->query('SELECT * FROM pracownicy where zarobki>30');
            echo("<table border=1>");
            echo("<th>id</th>");
            echo("<th>imie</th>");
            echo("<th>dzial</th>");
            echo("<th>zarobki</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                        echo("</tr>");
                }
                    echo("</table>");

            echo("<h2>Zad5</h2>");
            echo("<h3>SELECT * FROM pracownicy where zarobki<45</h3>");
            
            $result=$conn->query('SELECT * FROM pracownicy where zarobki<45');
            echo("<table border=1>");
            echo("<th>id</th>");
            echo("<th>imie</th>");
            echo("<th>dzial</th>");
            echo("<th>zarobki</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                        echo("</tr>");
                }
                    echo("</table>");




        ?>
</body>
</html>
