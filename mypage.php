<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
  <meta charset="utf-8">
  <title>My page</title>
  <link href="css/stylesheet.css" rel="stylesheet" type="text/css">
  <link href="css/defaultstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
  <div class="topbar">
    <div class="titleDiv">
      <h1> <a href="homepage.php"> Politic Proposals </a> </h1>
    </div>
    <ul class="navigationBar">
      <?php
      session_start();
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
        <li><a href="createpropose.php">Proponi </a></li>
        <li><a href="mypage.php">Benvenuto '.$_SESSION["user"].'</a></li>';
      }
      else {
        echo '<li><a href="logout.php">Logout</a></li>
        <li><a href="informazioni.html">Informazioni</a></li>
        <li><a href="ricerca.html">Ricerca</a></li>
        <li><a href="convalida.php">Convalida proposta </a></li>
        <li><a href="mypage.php">Benvenuto '.$_SESSION["user"].'</a></li>';
      }
      ?>
    </ul>
  </div>

</div>

</body>
</html>
