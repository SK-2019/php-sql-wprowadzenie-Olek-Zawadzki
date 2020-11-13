<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<strong><a href=https://github.com/SK-2019/php-sql-wprowadzenie-Olek-Zawadzki>Github</a></strong>
<div class="nav">
    <a class="nav_link" href="index.php">Strona Startowa</a>
    <a class="nav_link" href="pracownicy.php">Pracownicy - wstęp</a>
    <a class="nav_link" href="pracownicy_organizacja.php">Pracownicy i Organizacja</a>
    <a class="nav_link" href="data_czas.php">Data i Czas</a>
</div>
<h1>Olek Zawadzki 2ti 31</h1>
<h2>Funkcje Agregujące</h2>
<?php
             echo("<hr />");
             require_once('conn.php');
            $sql=('SELECT sum(zarobki) as suma from pracownicy');
            $result=$conn->query($sql); //mysql
                echo("<h3>Suma zarobków wszystkich pracowników</h3>");//nazwa nad tabelą
                echo("<table border=1>");
                echo("<li>SQL: $sql");
                echo("<th>suma</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                            echo("<td>".$row['suma']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
        echo("<hr />");
