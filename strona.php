<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
  
<?php
  echo("strona.php");

  echo("<li> imie: ".$_POST['name']."</li>");
  echo("<li> nazwisko:".$_POST['lastname']"</li>");
  echo("<li> kraj: ".$_POST['country']."</li>");
?>
