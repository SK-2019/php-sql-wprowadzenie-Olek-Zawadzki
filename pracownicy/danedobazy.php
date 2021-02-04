<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
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
            <a class="dropdown-item" href="funkcjeagregujace.php">Funkcje Agregujące</a>
            <a class="dropdown-item" href="pracownicy_organizacja.php">Pracownicy i Organizacja</a>
            <a class="dropdown-item" href="data_czas.php">Data i Czas</a>
            <a class="dropdown-item" href="formularz.html">Formularze</a>
            <a class="dropdown-item" href="danedobazy.php">Dane Do Bazy</a>
</div>
      <h1>Dodawanie pracownika:</h1>
  
   <form action="insert.php" method="POST">
             <input type="text" name="imie" placeholder="imie"></br>
        <input type="text" name="dzial" placeholder="dzial" ></br>
   <input type="text" name="zarobki" placeholder="zarobki"></br>
   <input type="date" name="data_ur" ></br>
   <input type="submit" value="Dodaj">
   </form>
  <br>
  <br>
<h1>Usuwanie Pracownika</h1>
   <form action="delete.php" method="POST">
    <input type="text" name="id" placeholder="ID"></br>
   <input type="submit" value="delete">
  </body>
</html>


<?php
require_once("../assets/conn.php");
$result=$conn->query("Select * from pracownicy");
echo("<table border=1>");
    echo("<th>Id</th>");
    echo("<th>Imie</th>");
    echo("<th>Dzial</th>");
    echo("<th>Zarobki</th>");
    echo("<th>Data_urodzenia</th>");
    echo("<th class=usuń>Usuń</th>");
        while($row=$result->fetch_assoc()){
            echo("<tr>");
            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
            echo("<td><form action=delete.php method=POST>");    
            echo("<input type='hidden' name='id' value=".$row['id_pracownicy'].">");
            echo("<input type=submit value=X>");
            echo("</form></td>");
            echo("</tr>");}
echo("</table>");
?>
