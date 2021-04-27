<!DOCTYPE html>
<html>
<head>
    <meta charset-"UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://www.favicon.cc/logo3d/308168.png">
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>

<div class="item colorBlue">
<?php include("../assets/header.php"); ?>
</div>
<div class="item colorBlue">
    <div class="nav">
        
       <?php include("../assets/menu.php"); ?>
   
</div>
<div class="item colorGreen"></div>


<div class="con">

<?php
                echo("<h1>Przychodnia</h1>");


                require_once("../assets/connect.php");

                $sql = ("SELECT * FROM lekarz");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>lekarz</th>");
    

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["lekarz"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                        $sql = ("SELECT * FROM pacjent");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>pacjent</th>");
    

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["pacjent"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                $sql = ("SELECT * FROM lekarz, pacjent, lekarz_pacjent  where lekarz_id = lekarz.id and pacjent_id = pacjent.id");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                
                        echo("<table border=1>");
                        echo("<th>lekarz</th>");
                        echo("<th>pacjent</th>");
    

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["lekarz"]."</td><td>".$row["pacjent"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                        ?>
                        </div>