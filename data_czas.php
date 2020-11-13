<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<strong><a href=https://github.com/SK-2019/php-sql-wprowadzenie-Olek-Zawadzki>Github</a></strong>
<div class="nav">
    <a class="nav_link" href="index.php">Pracownicy - wstęp</a>
    <a class="nav_link" href="pracownicy.php">Funkcje Agregujące</a>
    <a class="nav_link" href="funkcjeagregujace.php">Pracownicy i Organizacja</a>
    <a class="nav_link" href="pracownicy_organizacja.php">Data i Czas</a>
</div>
<h1>Olek Zawadzki 2ti 31</h1>
<h2>Data i Czas</h2> 
<?php
                        require_once('conn.php');
                        echo("<hr>");
                        echo("<h3>Wiek poszczególnych pracowników (w latach)</h3>");
            $sql=('SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy,organizacja where dzial=id_org');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>id</th>");
                        echo("<th>imie</th>");
                        echo("<th>dzial</th>");
                        echo("<th>zarobki</th>");
                        echo("<th>nazwa działu</th>");
                        echo("<th>wiek</th>");
                        echo("<th>data_urodzenia</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['wiek']."</td><td>".$row['data_urodzenia']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");
