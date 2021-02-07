<!DOCTYPE html>
<html>
<head>
    <title>strona</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="https://www.favicon.cc/logo3d/308168.png">
</head>
<body>
    <div class="s">
<?php
  echo("<li> imie: ".$_POST['firstname']."</li>");
  echo("<li> nazwisko: ".$_POST['lastname']."</li>");
  echo("<li> kraj: ".$_POST['country']."</li>");
  echo("<li> telefon: ".$_POST['phone']."</li>");      
  
?>
    </div>  
</body>
</html>
