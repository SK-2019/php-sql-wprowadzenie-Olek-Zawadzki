<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style1.css">
<a href="https://github.com/SK-2019/php-sql-wprowadzenie-Olek-Zawadzki"> GitHub </a>
<div class="nav">
<a class="nav_link" href="index.php">Strona Główna</a>  
<a class="nav_link" href="danedobazy.php">DaneDoBazy</a>
</div>
<?php

echo("<li>Imie: ".$_POST['imie']."</li>");
echo("<li>Dzial: ".$_POST['dzial']."</li>");
echo("<li>Zarobki: ".$_POST['zarobki']."</li>");
echo("<li>Data urodzenia: ".$_POST['data_ur']."</li>");

  require_once("conn.php");

   $sql = "INSERT INTO pracownicy(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES(NULL,'".$_POST['imie']."', '".$_POST['dzial']."', '".$_POST['zarobki']."', '".$_POST['data_ur']."')";
   if ($conn->query($sql) === TRUE) {
    echo("<br>"); 
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
 
 
 $sql=('SELECT * FROM pracownicy');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imię</th>");
        echo("<th>dział</th>");
        echo("<th>zarobki</th>");
        echo("<th>data urodzenia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td>");
                echo("</tr>");
            }
        echo("</table>");
$conn->close(); 
?>
