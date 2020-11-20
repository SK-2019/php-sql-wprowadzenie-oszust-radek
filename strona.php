<!DOCTYPE html>
<html>
<head>
    <title>strona</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="s">
<?php
  echo("<li> firstname: ".$_POST['imie']."</li>");
  echo("<li> lastname: ".$_POST['nazwisko']."</li>");
  echo("<li> country: ".$_POST['kraj']."</li>");
  echo("<li> phone: ".$_POST['nr telefonu']."</li>");      
  
?>
    </div>  
</body>
</html>
