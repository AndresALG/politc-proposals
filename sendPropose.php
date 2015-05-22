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
    $propose = $_POST["proposta"];
    $category = $_POST["category"];
    $user = $_SESSION["user"];
    $adminemail = $chooser->chooseAdminEmail();
    $subject ="Propose from ".$user;
    $date = date("Y-m-d H:i:s"); //mounth day year;
    $arrayMessage=array("Titolo"=>$title,"Autore"=>$user,"Proposta"=>$propose,"Categoria"=>$category,"Data"=>$date);
    //$message = "titolo: ".$title."\nAutore: ".$user."\nProposta:\n".$propose."\nCategoria: ".$category."\nData: ".$date;
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


      if($sender->sendEmail($adminemail,$arrayMessage,$subject))
        echo "<p> Proposta inviata con successo !</p>";
      else
        echo "<p> Errori durante l'invio per favore rimprova più tardi</p>";

        echo "<p> Premi <a href=\"homepage.php\"> qui </a> per tornare alla home page </p>";
    ?>


</BODY>
</HTML>
