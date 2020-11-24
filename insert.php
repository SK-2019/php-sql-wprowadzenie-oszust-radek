<?php

require_once("connect.php");
$sql =  "INSERT INTO `pracownicy`(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES (NULL,'".$_POST['imie']."','".$_POST['dzial']."','".$_POST['zarobki']."','".$_POST['data_']."')";
echo($sql);
mysqli_query($conn,$sql);
mysqli_close($conn);

?>
      

  


