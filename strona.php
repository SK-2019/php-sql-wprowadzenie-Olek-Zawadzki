<?php

echo("jesteś na stronie.php");
echo("<br>");
echo($_POST["imie"]);
echo("<br>");
echo($_POST["nazwisko"]);


   require_once('conn.php');
  $sql = "INSERT INTO pracownicy (imie, nazwisko)
  VALUES ('John', 'Doe')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();

?>
