<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="../assets/style.css">
   <meta name="viewport" content="width=device-width">
<a href=https://github.com/SK-2019/php-sql-wprowadzenie-Olek-Zawadzki>Github</a>
   <div class="nav">
   <a class="nav_link" href="../index.php">Strona Główna</a>
   <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php

function petla(){
    echo("<li>test");
    for($i=1;$i<10;$i++){
        echo("<li>to jest w petli: ".$i);
    }
}
petla();

function robocik($sql){
    require_once("../assets/conn.php");
    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>id</th>");
        echo("<th>imię</th>");
        echo("<th>dział</th>");
        echo("<th>zarobki</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
        }
robocik('SELECT * FROM pracownicy');
?>
