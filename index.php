<?php
    echo("<h1>Radek Oszust</h1>");

    $conn=new mysqli("mysql-oszust-radek.alwaysdata.net","217211","Radek003003%","oszust-radek_db");
    $result=$conn->query('SELECT * FROM pracownicy');
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

    $conn=new mysqli("mysql-oszust-radek.alwaysdata.net","217211","Radek003003%","oszust-radek_db");
    $result=$conn->query('SELECT * FROM pracownicy');
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
