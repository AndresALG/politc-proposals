<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Political Proposals</title>
  <link href="css/stylesheet.css" rel="stylesheet" type="text/css">
  <link href="css/defaultstyle.css" rel="stylesheet" type="text/css">
  <?php
  include 'php/Connection.php';
  $data=new Connection();
  $data->conn();
  $data->selectDB("proposalsDatabase");
  session_start();
  if(!isset($_SESSION["logged"])) {
    $_SESSION["logged"] = false;
  }
  ?>
</head>
<body>
<div class="container">
  <div class="topbar">
    <div class="titleDiv">
      <h1> <a href="homepage.php"> Politic Proposals </a> </h1>
    </div>
    <ul class="navigationBar">
      <?php
      if(!$_SESSION["logged"]) {
        echo '<li><a href="informazioni.html">Informazioni</a></li>
        <li><a href="ricerca.html">Ricerca</a></li>
        <li><a href="registrati.php">Registrati</a></li>
        <li><a href="login.php">Login</a></li>';
      }
      else if (!$_SESSION["admin"]) {
        echo '<li><a href="logout.php">Logout</a></li>
        <li><a href="informazioni.html">Informazioni</a></li>
        <li><a href="ricerca.html">Ricerca</a></li>
        <li><a href="addPropose.php">Proponi </a></li>
        <li><a href="MyPage.php">Benvenuto '.$_SESSION["user"].'</a></li>';
      }
      else {
        echo '<li><a href="logout.php">Logout</a></li>
        <li><a href="informazioni.html">Informazioni</a></li>
        <li><a href="ricerca.html">Ricerca</a></li>
        <li><a href="convalida.php">Convalida proposta </a></li>
        <li><a href="MyPage.php">Benvenuto '.$_SESSION["user"].'</a></li>';
      }
      ?>
    </ul>
  </div>
  <?php
  $query= 'SELECT Titolo,Esposizione FROM Proposta';
  $result=mysql_query($query);
  while ($row= mysql_fetch_array($result))
  {
  }
  ?>
</div>

</body>
</html>
