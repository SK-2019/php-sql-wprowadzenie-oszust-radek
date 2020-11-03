<!DOCTYPE html>
<html>
<head>
    <meta charset-"UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

        <?php
            echo("<h1>Radek Oszust</h1>");
            require_once("connect.php");

            echo("<h2>Zad1</h2>");
            echo("<h3>SELECT count(imie) as kjl, dzial, nazwa_dzial FROM pracownicy, organizacja</h3>");
            $conn=new mysqli("mysql-oszust-radek.alwaysdata.net","217211","Radek003003%","oszust-radek_db");
            $result=$conn->query('SELECT count(imie) as kjl, dzial, nazwa_dzial FROM pracownicy, organizacja where dzial=id_org group by dzial');
            echo("<table border=1>");
            echo("<th>id</th>");
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
            $conn=new mysqli("mysql-oszust-radek.alwaysdata.net","217211","Radek003003%","oszust-radek_db");
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
            
            $conn=new mysqli("mysql-oszust-radek.alwaysdata.net","217211","Radek003003%","oszust-radek_db");
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
            $conn=new mysqli("mysql-oszust-radek.alwaysdata.net","217211","Radek003003%","oszust-radek_db");
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
            $conn=new mysqli("mysql-oszust-radek.alwaysdata.net","217211","Radek003003%","oszust-radek_db");
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
