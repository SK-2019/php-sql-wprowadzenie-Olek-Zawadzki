<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../assets/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div id="container">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Menu
        </button>
        <strong><a href=https://github.com/SK-2019/php-sql-wprowadzenie-Olek-Zawadzki>Github</a></strong>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="../index.php">Strona Startowa</a>
            <a class="dropdown-item" href="funkcjeagregujace.php">Funkcje Agregujące</a>
            <a class="dropdown-item" href="pracownicy_organizacja.php">Pracownicy i Organizacja</a>
            <a class="dropdown-item" href="data_czas.php">Data i Czas</a>
            <a class="dropdown-item" href="formularz.html">Formularze</a>
            <a class="dropdown-item" href="danedobazy.html">Dane Do Bazy</a>
</div>
<h1>Olek Zawadzki 2ti 31</h1>
<h2>Tabela Pracowników</h2>
<?php
            echo("<hr />");
            echo("<h3>Pracownicy tylko z działu 2</h3>");
            require_once('../assets/conn.php');
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
    ?>