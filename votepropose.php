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
    ?>
  </HEAD>
  <BODY>
    <?php
    echo '<div class="container">
    <div class="topbar">
    <div class="titleDiv">
    <h1> <a href="homepage.php"> Politic Proposals </a> </h1>
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
      $query_controll = "SELECT * FROM Propostavotata WHERE IDProposta='$ID' AND NomeUtente='$USER'";
      $response_controll = mysql_query($query_controll);
      $num_rows = mysql_num_rows($response_controll);
      if($num_rows == 0 ){
        $response = mysql_query($query);
        if($response){
          echo '<p class="white-p"> Voto aggiunto con successo!</p>';
        }
        else {
          echo '<p class="white-p"> Il voto non è stato aggiunto riporvare!</p>';
        }
        $queryaddvote = "INSERT INTO Propostavotata VALUES('$ID','$USER')";
        mysql_query($queryaddvote) or die(mysql_error());

      }
      else {
        echo '<p class="white-p"> Hai già votato questa proposta</p>';
      }
    }
      header("refresh:2,url=homepage.php");

  }
    echo '</div></div>';
    $conn->closeConn();
    ?>

  </BODY>
</HTML>
