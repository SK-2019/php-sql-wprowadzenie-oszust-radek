<?php
  echo("jestes w insert.php <br>");
  echo "<li>". $_POST['name'];
  echo "<li>". $_POST['dzial'];
  echo "<li>". $_POST['zarobki'];
  echo "<li>". $_POST['data_urodzenia'];

    $conn = new mysqli(mysql-oszust-radek.alwaysdata.net","217211","Radek003003%","oszust-radek_db);
    
      require_once("connect.php");

  $sql = "INSERT INTO Pracownik (null, name, dzial,zarobki,data_urodzenia)
          VALUES (
            null, 
            $_POST['name'], 
            $_POST['dzial'], 
            $_POST['zarobki'],
            $_POST['data_urodzenia']
          ";

        echo "<li>". $sql;

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>
?>
