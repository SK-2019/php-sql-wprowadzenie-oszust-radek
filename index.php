<!DOCTYPE html>
<html>
<head>
    <meta charset-"UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://www.favicon.cc/logo3d/308168.png">
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
    <div class="nav">
        <h2>linki</h2>
        <h4><a href="https://github.com/SK-2019/php-sql-wprowadzenie-oszust-radek">Github</a></h4>
        <h4><a href="/pracownicy/orgPracownicy.php">Org i Prac</a></h4>
        <h4><a href="/pracownicy/agregat.php">F. agregujace</a></h4>
        <h4><a href="/pracownicy/pracownicy.php">Pracownicy</a></h4>
        <h4><a href="/pracownicy/dataiczas.php">Data i czas</a></h4>
        <h4><a href="/dane-do-bazy/strona.php">Strona</a></h4>
        <a href="/dane-do-bazy/formularz.html">Formularz</a>
        <h4><a href="/dane-do-bazy/daneDoBazy.php">Insert</a></h4>
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
