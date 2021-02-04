<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/style.css">

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
            <a class="dropdown-item" href="pracownicy/pracownicy.php">Pracownicy-wstęp</a>
            <a class="dropdown-item" href="pracownicy/funkcjeagregujace.php">Funkcje Agregujące</a>
            <a class="dropdown-item" href="pracownicy/pracownicy_organizacja.php">Pracownicy i Organizacja</a>
            <a class="dropdown-item" href="pracownicy/data_czas.php">Data i Czas</a>
            <a class="dropdown-item" href="pracownicy/formularz.html">Formularze</a>
            <a class="dropdown-item" href="pracownicy/danedobazy.php">Dane Do Bazy</a>
            <a class="dropdown-item" href="pracownicy/function.php">Funkcja</a>
       <!-- </div>
      </div>
     </div>
    </div>
   </div>
  </div> -->
        </div>
        <h1>Olek Zawadzki 2ti 31</h1>
<h2>Strona Startowa</h2> 
    <?php
   require_once('assets/conn.php');
  
    $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<h3>Tabela Pracowników</h3>");
        echo("<li> $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imię</th>");
        echo("<th>dział</th>");
        echo("<th>zarobki</th>");
        echo("<th>nazwa działu</th>");
        echo("<th>data urodzenia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                echo("</tr>");
            }
        echo("</table>");
    echo("<hr />");
    $sql=('SELECT * from pracownicy,organizacja where dzial=id_org and imie like "%a"');
    $result=$conn->query($sql);
    echo("<h3>Tabela Kobiet</h3>");
        echo("<li> $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imię</th>");
        echo("<th>dział</th>");
        echo("<th>zarobki</th>");
        echo("<th>nazwa działu</th>");
        echo("<th>data urodzenia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
     $sql=('SELECT * from pracownicy,organizacja where dzial=id_org  order by zarobki desc');
    $result=$conn->query($sql); 
        echo("<h3>Tabela Pracowników Posortowana Zarobkami Malejąco</h3>");
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>id</th>");
        echo("<th>imię</th>");
        echo("<th>dział</th>");
        echo("<th>zarobki</th>");
        echo("<th>nazwa działu</th>");
        echo("<th>data urodzenia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
    ?>

    </div>


</body>
</html>

