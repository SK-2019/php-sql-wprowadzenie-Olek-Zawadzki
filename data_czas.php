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

                        echo("<h3>Wiek poszczególnych pracowników (w latach) z działu serwis</h3>");
                        $sql=('SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy,organizacja where dzial=id_org and nazwa_dzial="serwis"');
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

                        echo("<h3>Suma lat wszystkich pracowników</h3>");
                        $sql=('SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>Suma</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['Suma']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");

                        echo("<h3>Suma lat pracowników z działu handel</h3>");
                        $sql=("SELECT sum(year(curdate())-year(data_urodzenia)) as Suma, nazwa_dzial from pracownicy, organizacja where dzial=id_org and nazwa_dzial='handel'");
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>Suma</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['Suma']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");
    
                        echo("<h3>Suma lat kobiet</h3>");
                        $sql=('SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy where imie like "%a"');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>Suma</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['Suma']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");
    
                        echo("<h3>Suma lat mężczyzn</h3>");
                        $sql=('SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy where imie not like "%a"');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>Suma</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['Suma']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");

                        echo("<h3>Suma lat pracowników w poszczególnych działach  </h3>");
                        $sql=('SELECT nazwa_dzial,sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja where dzial=id_org group by dzial');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>Suma</th>");
                        echo("<th>nazwa działu</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['Suma']."</td><td>".$row['nazwa_dzial']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");
    
                        echo("<h3>Najstarsi pracownicy w każdym dziale (nazwa_dział, wiek)</h3>");
                        $sql=('SELECT MAX(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek, nazwa_dzial from pracownicy,organizacja where id_org=dzial group by dzial');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>wiek</th>");
                        echo("<th>nazwa działu</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['wiek']."</td><td>".$row['nazwa_dzial']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");

                        echo("<h3>Najmłodsi pracownicy z działu: handel i serwis (nazwa_dział, wiek)</h3>");
                        $sql=('SELECT min(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek, nazwa_dzial from pracownicy,organizacja where dzial=id_org and nazwa_dzial="handel" or nazwa_dzial="serwis" group by nazwa_dzial');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>wiek</th>");
                        echo("<th>nazwa działu</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['wiek']."</td><td>".$row['nazwa_dzial']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");
    
                        echo("<h3>Najmłodsi pracownicy z działu: handel i serwis (Imię, nazwa_dział, wiek)*</h3>");
                        $sql=('SELECT imie,min(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek, nazwa_dzial from pracownicy,organizacja where dzial=id_org and nazwa_dzial="handel" or nazwa_dzial="serwis" group by nazwa_dzial');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>imie</th>");
                        echo("<th>wiek</th>");
                        echo("<th>nazwa działu</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['imie']."</td><td>".$row['wiek']."</td><td>".$row['nazwa_dzial']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");

                        echo("<h3>Długość życia pracowników w dniach</h3>");
                        $sql=('SELECT imie,DATEDIFF(CURDATE(),data_urodzenia) as dni_zycia from pracownicy');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>imię</th>");
                        echo("<th>dni życia</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['imie']."</td><td>".$row['dni_zycia']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");

                        echo("<h3>Najstarszy mężczyzna</h3>");
                $sql=('SELECT * From pracownicy, organizacja where imie not like "%a" and dzial=id_org order by data_urodzenia asc limit 1');
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
                        
                        echo("<h2>Formatowanie Dat</h2>");
            echo("<hr />");


?>
