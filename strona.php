<?php

echo("jesteś na stronie.php");
echo("<br>");
echo($_POST["imie"]);
echo("<br>");
echo($_POST["nazwisko"]);


require("connect.php");
$sql = "INSERT INTO pracownicy(`id_pracownicy`, `imie`) VALUES (NULL,'".$_POST['imie']."')";
$conn->query($sql);

?>
