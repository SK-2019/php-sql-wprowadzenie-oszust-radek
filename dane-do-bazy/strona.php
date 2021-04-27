<!DOCTYPE html>
<html>
<head>
    <title>strona</title>
    <link rel="stylesheet" href="/assets/style.css">
    <link rel="icon" href="https://www.favicon.cc/logo3d/308168.png">
</head>
<body>
<div class="nav">
        <h2>linki</h2>
        <h4><a href="/index.php">Strona Główna</a></h4>
        <h4><a href="https://github.com/SK-2019/php-sql-wprowadzenie-oszust-radek">Github</a></h4>
        <h4><a href="/pracownicy/orgPracownicy.php">Org i Prac</a></h4>
        <h4><a href="/pracownicy/agregat.php">F. agregujace</a></h4>
        <h4><a href="/pracownicy/pracownicy.php">Pracownicy</a></h4>
        <h4><a href="/pracownicy/dataiczas.php">Data i czas</a></h4>
        <h4><a href="/dane-do-bazy/strona.php">Strona</a></h4>
        <a href="/dane-do-bazy/formularz.html">Formularz</a>
        <h4><a href="/dane-do-bazy/daneDoBazy.html">Insert</a></h4>
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
