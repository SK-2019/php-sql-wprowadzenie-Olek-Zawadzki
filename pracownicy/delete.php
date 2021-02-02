<?php
require_once("../assets/conn.php");
$sql =  "DELETE FROM pracownicy where id_pracownicy='".$_POST['id']."'";
echo($sql);
echo($_POST['id']);
mysqli_query($conn,$sql);
mysqli_close($conn);
//header("location:https://zawadzki-olek.herokuapp.com/danedobazy.php");

?>
