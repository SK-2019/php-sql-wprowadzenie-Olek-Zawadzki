<?php

echo("jesteś na stronie.php");
echo("<br>");
echo($_POST["imie"]);
echo("<br>");
echo($_POST["nazwisko"]);

$sql = "INSERT INTO `pracownicy`(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES (null,"ania",2,60,"1985-12-11")";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
