<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div id="container">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Menu
    </button>
        <strong><a href="https://github.com/SK-2019/php-sql-wprowadzenie-Olek-Zawadzki" target="_blank">Github</a></strong>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="../index.php">Strona Startowa</a>
            <a class="dropdown-item" href="pracownicy.php">Pracownicy - wstęp</a>
            <a class="dropdown-item" href="pracownicy_organizacja.php">Pracownicy i Organizacja</a>
            <a class="dropdown-item" href="data_czas.php">Data i Czas</a>
            <a class="dropdown-item" href="formularz.html">Formularze</a>
            <a class="dropdown-item" href="danedobazy.html">Dane Do Bazy</a>
</div>
<h1>Olek Zawadzki 2ti 31</h1>
<h2>Funkcje Agregujące</h2>
<?php
             echo("<hr />");
             require_once('../assets/conn.php');
            $sql=('SELECT sum(zarobki) as suma from pracownicy');
            $result=$conn->query($sql); 
                echo("<h3>Suma zarobków wszystkich pracowników</h3>");
                echo("<table border=1>");
                echo("<li> $sql");
                echo("<th>suma</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                            echo("<td>".$row['suma']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
        echo("<hr />");
     $sql=('SELECT nazwa_dzial,sum(zarobki) as suma from pracownicy,organizacja where imie like "%a" and dzial=id_org group by nazwa_dzial');
        $result=$conn->query($sql); 
            echo("<h3>Suma zarobków wszystkich kobiet</h3>");
            echo("<table border=1>");
            echo("<li> $sql");
            echo("<th>suma</th>");
            echo("<th>nazwa działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
    echo("<hr />");
     $sql=('SELECT nazwa_dzial,sum(zarobki) as suma from pracownicy,organizacja where imie not like "%a" and dzial=id_org and dzial=2 or dzial=3 group by dzial');
    $result=$conn->query($sql); 
        echo("<h3>Suma zarobków mężczyzn pracujących w dziale 2 i 3</h3>");
        echo("<table border=1>");
        echo("<li> $sql");
        echo("<th>suma</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
    echo("<hr />");
    
    $sql=('SELECT nazwa_dzial,dzial,avg(zarobki) as srednia from pracownicy,organizacja where dzial=id_org');
            $result=$conn->query($sql); 
                echo("<h3>Średnia zarobków wszystkich mężczyzn</h3>");
                echo("<table border=1>");
                echo("<li> $sql");
                echo("<th>srednia</th>");
                echo("<th>nazwa działu</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                            echo("<td>".$row['srednia']."</td><td>".$row['nazwa_dzial']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
        echo("<hr />");

    $sql=('SELECT nazwa_dzial,avg(zarobki) as srednia from pracownicy,organizacja where dzial=4 and dzial=id_org group by nazwa_dzial');
        $result=$conn->query($sql); 
            echo("<h3>Średnia zarobków pracowników z działu 4</h3>");
            echo("<table border=1>");
            echo("<li> $sql");
            echo("<th>srednia</th>");
            echo("<th>nazwa działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['srednia']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
    echo("<hr />");
    
      $sql=('SELECT nazwa_dzial,avg(zarobki) as srednia from pracownicy,organizacja where imie not like "%a" and dzial=1 or dzial=2 and dzial=id_org group by nazwa_dzial');
    $result=$conn->query($sql); 
        echo("<h3>Średnia zarobków mężczyzn z działu 1 i 2</h3>");
        echo("<table border=1>");
        echo("<li> $sql");
        echo("<th>srednia</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['srednia']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
    
    $sql=('SELECT nazwa_dzial,count(imie) as ilosc from pracownicy,organizacja where dzial=id_org');
    $result=$conn->query($sql); 
        echo("<h3>Ilu jest wszystkich pracowników</h3>");
        echo("<table border=1>");
        echo("<li> $sql");
        echo("<th>ilosc</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['ilosc']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
 $sql=('SELECT nazwa_dzial,count(imie) as ilosc from pracownicy,organizacja where imie like "%a" and dzial=id_org and dzial=1 or dzial=3 group by dzial');
    $result=$conn->query($sql); 
        echo("<h3>Ile kobiet pracuje łącznie w działach 1 i 3</h3>");
        echo("<table border=1>");
        echo("<li> $sql");
        echo("<th>ilosc</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['ilosc']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
            echo("<h2>Group by</h2>");
            echo("<hr />");
    
       $sql=('SELECT nazwa_dzial,sum(zarobki) as suma from pracownicy,organizacja where dzial=id_org group by dzial');
    $result=$conn->query($sql); 
        echo("<h3>Suma zarobków w poszczególnych działach </h3>");
        echo("<table border=1>");
        echo("<li> $sql");
        echo("<th>suma</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
        $sql=('SELECT nazwa_dzial,count(zarobki) as ilosc from pracownicy,organizacja where dzial=id_org group by dzial');
    $result=$conn->query($sql);
        echo("<h3>Ilość pracowników w poszczególnych działach </h3>");
        echo("<table border=1>");
        echo("<li> $sql");
        echo("<th>ilosc</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['ilosc']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
            $sql=('SELECT nazwa_dzial,avg(zarobki) as srednia from pracownicy,organizacja where dzial=id_org group by dzial');
    $result=$conn->query($sql);
        echo("<h3>Średnie zarobków w poszczególnych działach</h3>");
        echo("<table border=1>");
        echo("<li> $sql");
        echo("<th>srednia</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['srednia']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
            echo("<h2>Having</h2>");
            echo("<hr />");
    
    
            $sql=('SELECT nazwa_dzial,sum(zarobki)as suma from pracownicy, organizacja where dzial=id_org GROUP BY nazwa_dzial HAVING sum(zarobki) < 28 ');
    $result=$conn->query($sql);
        echo("<h3>Suma zarobków w poszczególnych działach mniejsza od 28</h3>");
        echo("<table border=1>");
        echo("<li> $sql");
        echo("<th>suma</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
        echo("<hr>");
    
         $sql=('SELECT nazwa_dzial,avg(zarobki)as suma from pracownicy, organizacja WHERE imie not like "%a" GROUP BY nazwa_dzial HAVING avg(zarobki) > 30');
    $result=$conn->query($sql); 
            echo("<h3>Średnie zarobków mężczyzn w poszczególnych działach większe od 30</h3>");
            echo("<table border=1>");
            echo("<li> $sql");
            echo("<th>średnia</th>");
            echo("<th>nazwa działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
            echo("<hr>");

            $sql=('SELECT nazwa_dzial,count(id_pracownicy)as suma from pracownicy, organizacja WHERE dzial=id_org GROUP BY dzial HAVING count(id_pracownicy) > 3');
    $result=$conn->query($sql); 
            echo("<h3>Ilość pracowników w poszczególnych działach większa od 3</h3>");
            echo("<table border=1>");
            echo("<li> $sql");
            echo("<th>ilość</th>");
            echo("<th>nazwa działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
            echo("<hr>");
?>