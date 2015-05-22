<HTML>
  <HEAD>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
    <link href="css/defaultstyle.css" type="text/css" rel="stylesheet">
    <?php
    include "php/Connection.php";
    session_start();
    $Conn = new Connection();
    $Conn->conn();
    $Conn->selectDB("proposalsDatabase");
    $adder = new Post();
    $title = $_POST["title"];
    $author = $_POST["author"];
    $date = $_POST["data"];
    $date = date("Y-m-d H:i:s",strtotime($date));
    $propose = $_POST["proposta"];
    $category = $_POST["category"];
    $user = $_SESSION["user"];
    $propose = addslashes($propose);
    ?>

    <style>
    p,a:visited{
      color: white;
    }
    a:visited,a:link {
      display: inline;
    }

    </style>
  </HEAD>

  <BODY>

    <?php


      if($adder->addPropose($author,$title,$propose,$category,$user,$date))
        echo "<p> Proposta aggiunta!</p>";
      else
        echo "<p> Errori durante l'inserimento per favore riprova più tardi</p>";

        echo "<p> Premi <a href=\"homepage.php\"> qui </a> per tornare alla home page </p>";
    ?>


</BODY>
</HTML>
