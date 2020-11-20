<!DOCTYPE html>
<html>
<head>
    <title>strona</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="s">
<?php
  echo("<li> firstname: ".$_POST['firstname']."</li>");
  echo("<li> lastname: ".$_POST['lastname']."</li>");
  echo("<li> country: ".$_POST['country']."</li>");
  echo("<li> phone: ".$_POST['phone']."</li>");      
  
?>
    </div>  
</body>
</html>
