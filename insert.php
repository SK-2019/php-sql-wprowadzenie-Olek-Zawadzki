<?php
echo("<li>Imie: ".$_POST['imie']."</li>");
echo("<li>Dzial: ".$_POST['dzial']."</li>");
echo("<li>Zarobki: ".$_POST['zarobki']."</li>");
echo("<li>Data urodzenia: ".$_POST['data_ur']."</li>");

  require_once("connect.php");

  $sql = "INSERT INTO pracownicy(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES(NULL,'".$_POST['imie']."','".$_POST['dzial']."','".$_POST['zarobki']."' ,'".$_POST['data_ur']."')";
  
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
?>
