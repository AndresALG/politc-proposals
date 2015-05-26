<!Doctype HTML>
<HTML>
  <HEAD>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
    <link href="css/stylesheet.css" rel="stylesheet" type="text/css">
    <link href="css/defaultstyle.css" rel="stylesheet" type="text/css">
    <?php
    session_start();
    include "php/Connection.php";
    $conn = new Connection();
    $conn->conn();
    $conn->selectDB("proposalsDatabase");
    $controller = new Controller();
    ?>
  </HEAD>
  <BODY>
    <?php
    echo '<div class="container">
    <div class="topbar">
    <div class="titleDiv">
    <h1> <a href="index.php"> Politic Proposals </a> </h1>
    </div> </div>
    <div class="advise">';
    if(!$_SESSION["logged"]){
      echo "<p class=\"white-p\"> Devi essere connesso per poter votare.\nFai il login <a class=\"white-a\" href=\"login.php\"> qui </a> oppure registrati <a class=\"white-a\" href=\"registrati.php\">qui </a> <p>";
    }

    else{
      $ID = $_GET["ID"];
      $USER = $_SESSION["user"];
      if(!$_SESSION["admin"]) {
      $query = "UPDATE Proposta SET Voti = Voti + 1  WHERE ID='$ID'";
        $response = mysql_query($query);
        if($response){
          echo '<p class="white-p"> voto aggiunto con successo!</p>';
        }
        else {
          echo '<p class="white-p"> Il voto non è stato aggiunto riporvare!</p>';
        }
        $queryaddvote = "INSERT INTO Propostavotata VALUES('$ID','$USER')";
        mysql_query($queryaddvote) or die(mysql_error());
      }
    }
      header("refresh:2,url=index.php");

    echo '<div class="footer">
      <div class="footer-container">
      <div class="footer-paragraph"> Copyright (c) 2014 Copyright Holder All Rights Reserved. </div>
    </div>
  </div>';
    $conn->closeConn();
    ?>

  </BODY>
</HTML>
