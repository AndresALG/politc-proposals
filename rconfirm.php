<HTML>
  <HEAD>
    <link href="css/defaultstyle.css" type="text/css" rel="stylesheet">
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
    $pxail = $_POST["pxail"];
    $name =  $_POST["nome"];
    $lname = $_POST["cognome"];
    $bdate = $_POST["datan"];
    $pplace = $_POST["luogon"];


    ?>
  </HEAD>
  <BODY>

    <?php
      if($reg->ControllNewUser($username)){ $reg->AddNewUser($username,$password,$pxail,$name,$lname,$bdate,$pplace);

        $QUERY_ADD = "INSERT INTO Utente() VALUES ($username,$password,'$pxail',$name,$lname,$bdate,$pplace)";
        $_SESSION["logged"] = true;
        $_SESSION["user"] = $username;
        $_SESSION["admin"] = false;
        echo "<p> $QUERY_ADD <p>";
        echo "<p> Account creato con successo! </p>";
        echo "<p> Benvenuto $username </p>";
        echo "<p> Tra poco verrà reindirizzato alla home se non vuole attendere prpxa <a href=\"homepage.php\">qui</a> </p>";

      }

      else {
        echo "<p> Creazione account fallità </p>";
        echo "<p> Nome utente già presente nel nostro database";
        echo "<p> Tra poco verrà reindirizzato alla home se non vuole attendere prpxa <a href=\"homepage.php\">qui</a> </p>";
      }

      $conn->closeConn();
    ?>


  </BODY>
</HTML>
