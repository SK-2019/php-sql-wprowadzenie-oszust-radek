<!DOCTYPE html>
<html>
<head>
    <title>strona</title>
    <link rel="stylesheet" href="style.css">
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
