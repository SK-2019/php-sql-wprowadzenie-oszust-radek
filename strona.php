<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="s">
<?php
  echo("<li> imie: ".$_POST['imie']."</li>");
  echo("<li> nazwisko: ".$_POST['nazwisko']."</li>");
  echo("<li> kraj: ".$_POST['country']."</li>");
  
?>
    </div>  
</body>
</html>
