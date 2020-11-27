<?php
echo("<li>Imie: ".$_POST['imie']);
echo("<li>Dzial: ".$_POST['dzial']);
echo("<li>Zarobki: ".$_POST['zarobki']);
echo("<li>Data urodzenia: ".$_POST['data_ur']);

  require_once('conn.php');

$sql = "sql = "INSERT INTO pracownicy(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`)
  VALUES(NULL,'".$_POST['imie']."', '".$_POST['dzial']."', '".$_POST['zarobki']."', '".$_POST['data_ur']."')";

echo "<li>". $sql;
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

  $conn->close();
?>
