<?php

  echo("<li>ID: ".$_POST['id']."</li>");

  require_once("connect.php");

  $sql = "DELETE FROM pracownicy where id_pracownicy='".$_POST['id']."'";
  
  
  if ($conn->query($sql) === TRUE) {
    echo "Pracownik został usunięty poprawnie!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
?>
