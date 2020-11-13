<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<strong><a href=https://github.com/SK-2019/php-sql-wprowadzenie-Olek-Zawadzki>Github</a></strong>
<div class="nav">
    <a class="nav_link" href="pracownicy.php">Pracownicy - wstęp</a>
    <a class="nav_link" href="funkcjeagregujace.php">Funkcje Agregujące</a>
    <a class="nav_link" href="pracownicy_organizacja.php">Pracownicy i Organizacja</a>
    <a class="nav_link" href="data_czas.php">Data i Czas</a>
</div>
<h1>Olek Zawadzki 2ti 31</h1>
<h2>Tabela Pracowników</h2>
<?php
            echo("<hr />");
            echo("<h3>Pracownicy tylko z działu 2</h3>");
            require_once('conn.php');
    $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org and dzial=2 group by nazwa_dzial');
        $result=$conn->query($sql);
            echo("<table border=1>");
            echo("<li>SQL: $sql");
            echo("<th>id</th>");
            echo("<th>imie</th>");
            echo("<th>dzial</th>");
            echo("<th>zarobki</th>");
            echo("<th>nazwa_dzial</th>");
            echo("<th>data_urodzenia</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
            echo("<hr />");
    
     echo("<h3>Pracownicy tylko z działu 2 i z działu 3</h3>");
        $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org and dzial=2 or dzial=3 group by nazwa_dzial');
            $result=$conn->query($sql);
                echo("<table border=1>");
                echo("<li>SQL: $sql");
                echo("<th>id</th>");
                echo("<th>imie</th>");
                echo("<th>dzial</th>");
                echo("<th>zarobki</th>");
                echo("<th>nazwa_dzial</th>");
                echo("<th>data_urodzenia</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                            echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
                echo("<hr />");
    
    echo("<h3>Pracownicy tylko z zarobkami mniejszymi niż 30</h3>");
        $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org and zarobki<30 group by nazwa_dzial');
            $result=$conn->query($sql);//mysql
                echo("<table border=1>");
                echo("<li>SQL: $sql");
                echo("<th>id</th>");
                echo("<th>imie</th>");
                echo("<th>dzial</th>");
                echo("<th>zarobki</th>");
                echo("<th>nazwa_dzial</th>");
                echo("<th>data_urodzenia</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                            echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
                echo("<hr />");
    ?>
