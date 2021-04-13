<!DOCTYPE html>
<html>
<head>
    <title>strona</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="https://www.favicon.cc/logo3d/308168.png">
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
        <li class="nav_item"><a href="/dane-do-bazy/formularz.html">Formularz</a></li>
        <li class="nav_item"><a href="/dane-do-bazy/daneDoBazy.html">Insert</a></li>
</div>
<div class="item colorGreen"></div>
</div>
<?php
  echo("<li> imie: ".$_POST['firstname']."</li>");
  echo("<li> nazwisko: ".$_POST['lastname']."</li>");
  echo("<li> kraj: ".$_POST['country']."</li>");
  echo("<li> telefon: ".$_POST['phone']."</li>");      
  
?>
    </div>  
</body>
</html>
