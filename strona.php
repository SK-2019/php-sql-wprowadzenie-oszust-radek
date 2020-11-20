<!DOCTYPE html>
<html>
<head>
    <title>strona</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="s">
<?php
  echo("<li> imie: ".$_POST['imie']."</li>");
  echo("<li> nazwisko: ".$_POST['nazwisko']."</li>");
  echo("<li> kraj: ".$_POST['kraj']."</li>");
  echo("<li> phone: ".$_POST['nr telefonu']."</li>");      
  
?>
    </div>  
</body>
</html>
