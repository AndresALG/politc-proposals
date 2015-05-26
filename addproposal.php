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
    $proposal = $_POST["proposta"];
    $category = $_POST["category"];
    $user = $_SESSION["user"];
    $proposal = addslashes($proposal);
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
    echo '<div class="container">
    <div class="topbar">
    <div class="titleDiv">
    <h1> <a href="index.php"> Political Proposals </a> </h1>
    </div> </div>
    <div class="advise">';


      if($adder->addproposal($author,$title,$proposal,$category,$user,$date))
        echo "<p class=\"white-p\"> Proposta aggiunta!</p>";
      else
        echo "<p class=\"white-p\"> Errori durante l'inserimento per favore riprova più tardi</p>";

        echo "<p class=\"white-p\"> Premi <a class=\"white-a\" href=\"index.php\"> qui </a> per tornare alla home page </p>";

        echo "</div></div>"
    ?>

</BODY>
</HTML>
