<?php

echo("jesteś na stronie.php");
echo("<br>");
echo($_POST["imie"]);
echo("<br>");
echo($_POST["nazwisko"]);

$sql = "INSERT INTO `pracownicy`(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
