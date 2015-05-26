<HTML>
  <HEAD>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
    <link href="css/defaultstyle.css" type="text/css" rel="stylesheet"/>
    <link href="css/stylesheet.css" type="text/css" rel="stylesheet"/>
    <?php
    session_start();
    include "php/Connection.php";
    include "php/Authentication.php";
    $conn = new Connection();
    $conn->conn();
    $conn->selectDB("proposalsDatabase");
    $auth = new Authentication();

    $user = $_GET["user"];
    $idp = $_GET["id"];
    $comment = $_GET["comment"];
    $data = $_GET["data"];
    ?>

  </HEAD>
  <BODY>
    <?php
    if(!$_SESSION["admin"])
      $query = "INSERT INTO Commento(IDProposta,IDUtente,Descrizione,DataEffCommento) VALUES ('$idp','$user','$comment','$data')";
    else
      $query = "INSERT INTO Commento(IDProposta,IDAdmin,Descrizione,DataEffCommento) VALUES ('$idp','$user','$comment','$data')";
    $response = mysql_query($query) or die($query);

    if($response) {

      header("Location:proposalpage.php?id=$idp");
    }

    ?>

  </BODY>
</HTML>
