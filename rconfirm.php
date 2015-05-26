<HTML>
  <HEAD>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
    <link href="css/defaultstyle.css" type="text/css" rel="stylesheet">
    <link href="css/stylesheet.css" type="text/css" rel="stylesheet">
    <?php
    session_start();
    include "php/Connection.php";
    include "php/Authentication.php";
    $conn = new Connection();
    $conn->conn();
    $conn->selectDB("proposalsDatabase");
    $reg = new Registration();

    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $name =  $_POST["nome"];
    $lname = $_POST["cognome"];
    $bdate = $_POST["datan"];
    $pplace = $_POST["luogon"];


    ?>
  </HEAD>
  <BODY>

    <?php
    echo '<div class="container">
    <div class="topbar">
    <div class="titleDiv">
    <h1> <a href="index.php"> Political Proposals </a> </h1>
    </div> </div>
    <div class="advise">';
      if($reg->ControllNewUser($username)){ $reg->AddNewUser($username,$password,$email,$name,$lname,$bdate,$pplace);

        $QUERY_ADD = "INSERT INTO Utente() VALUES ($username,$password,'$email',$name,$lname,$bdate,$pplace)";
        $_SESSION["logged"] = true;
        $_SESSION["user"] = $username;
        $_SESSION["admin"] = false;
        echo "<p class=\"white-p\"> Account creato con successo! </p>";
        echo "<p class=\"white-p\"> Benvenuto $username </p>";
        echo "<p class=\"white-p\"> Tra poco verrà reindirizzato alla home se non vuole attendere premi <a class=\"white-a\" href=\"index.php\">qui</a> </p>";

      }

      else {
        echo "<p class=\"white-p\"> Creazione account fallità </p>";
        echo "<p class=\"white-p\"> Nome utente già presente nel nostro database";
        echo "<p class=\"white-p\"> Tra poco verrà reindirizzato alla home se non vuole attendere premi <a class=\"white-a\" href=\"index.php\">qui</a> </p>";
      }

      echo "</div></div>";
      $conn->closeConn();
    ?>


  </BODY>
</HTML>
