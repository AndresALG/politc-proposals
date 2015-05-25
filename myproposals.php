<!DOCTYPE html>
<html>
<head>
  <?php session_start(); ?>
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
  <meta charset="utf-8">
  <title> <?php echo $_SESSION["user"]."'s"; ?> page</title>
  <link href="css/stylesheet.css" rel="stylesheet" type="text/css">
  <link href="css/defaultstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
  <div class="topbar">
    <div class="titleDiv">
      <h1> <a href="homepage.php"> Politic Proposals </a> </h1>
    </div>
    <ul class="navigatorbar">
      <?php
      if (!$_SESSION["admin"]) {
        echo '<li><a href="logout.php">Logout</a></li>
        <li><a href="writeproposal.php">Proponi </a></li>
        <li><a href="mypage.php">Benvenuto '.$_SESSION["user"].'</a></li>';
      }
      else {
        echo '<li><a href="logout.php">Logout</a></li>
        <li><a href="convalida.php">Convalida proposta </a></li>
        <li><a href="mypage.php">Benvenuto '.$_SESSION["user"].'</a></li>';
      }
      ?>
    </ul>
  </div>

  <ul class="navigatorbar-elements">
    <li class="list-navigation-elements"> <a class="n-element" href="mypage.php"> Le mie informazioni </a></li>
    <li class="list-navigation-elements"> <a class="select-element" href="myproposals.php"> Le mie proposte </a></li>
  </ul>
  <div class="personal-list">
  <?php
  include "php/Connection.php";
  $conn = new Connection();
  $conn->conn();
  $conn->selectDB("proposalsDatabase");
  $query = "SELECT * FROM Proposta WHERE Autore = '$_SESSION[user]'";
  $response = mysql_query($query) or die (mysql_error());
  while($row = mysql_fetch_assoc($response))
  echo '<div class="list-item">
          <div class="title-item">
            <div class="title-proposal">
            <p class="proposal-label">'.$row["Titolo"].'</p></div>
            <div class="author-proposal">
            <p class="proposal-label">'.$row["Autore"].'</p>
            <p class="proposal-label"> <a href="modify.php?id='.$row["ID"].'"class="item-link">Edit </a> </p>
            </div>

          </div>
          <div class="proposal">
            <p class="proposal-textarea" >'.$row["Esposizione"].' </p>
          </div>
          <div class="item-footer">
            <div class="item-date">
              <p class="proposal-label">'.date("d-m-Y",strtotime($row["DataEffProposta"])).'</p>
            </div>


          </div>
        </div>'  ;

    ?>

  </div>
  <div class="footer">
    <div class="footer-container">
      <div class="footer-paragraph"> Copyright (c) 2014 Copyright Holder All Rights Reserved. </div>
    </div>
</div>
</div>

</body>
</html>
