<HTML>
  <HEAD>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
    <link href="css/defaultstyle.css" type="text/css" rel="stylesheet">
    <?php
    include "php/Sender.php";
    include "php/Connection.php";
    session_start();
    date_default_timezone_set('UTC');

    $data=new Connection();
    $data->conn();
    $data->selectDB("proposalsDatabase");

    $chooser = new Chooser();
    $title = $_POST["title"];
    $proposal = $_POST["proposta"];
    $category = $_POST["category"];
    $user = $_SESSION["user"];
    $adminemail = $chooser->chooseAdminEmail();
    $subject ="proposal from ".$user;
    $date = date("Y-m-d H:i:s"); //mounth day year;
    $arrayMessage=array("Titolo"=>$title,"Autore"=>$user,"Proposta"=>$proposal,"Categoria"=>$category,"Data"=>$date);
    //$message = "titolo: ".$title."\nAutore: ".$user."\nProposta:\n".$proposal."\nCategoria: ".$category."\nData: ".$date;
    $sender = new Sender();
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
    <h1> <a href="homepage.php"> Politic Proposals </a> </h1>
    </div> </div>
    <div class="advise">';

      if($sender->sendEmail($adminemail,$arrayMessage,$subject))
        echo "<p class=\"white-p\"> Proposta inviata con successo !</p>";
      else
        echo "<p class=\"white-p\"> Errori durante l'invio per favore rimprova più tardi</p>";

        echo "<p class=\"white-p\"> Premi <a class=\"white-a\" href=\"homepage.php\"> qui </a> per tornare alla home page </p>";

       echo "</div></div>"
    ?>


</BODY>
</HTML>
