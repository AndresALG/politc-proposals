<HTML>
  <HEAD>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
    <link href="css/defaultstyle.css" type="text/css" rel="stylesheet">
    <?php
    include "php/Sender.php";
    session_start();
    date_default_timezone_set('UTC');
    $title = $_POST["title"];
    $propose = $_POST["proposta"];
    $category = $_POST["category"];
    $user = $_SESSION["user"];
    $adminemail = "loaizaandres96@gmail.com";
    $subject ="Propose from ".$user;
    $date = date('m-d-Y'); //mounth day year;
    $message = "titolo: ".$title."\nAutore: ".$user."\nProposta:\n".$propose."\nCategoria: ".$category."\nData: ".$date;
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
      if($sender->sendEmail($adminemail,$message,$subject))
        echo "<p> Proposta inviata con successo !</p>";
      else
        echo "<p> Errori durante l'invio per favore rimprova più tardi</p>";

        echo "<p> Premi <a href=\"homepage.php\"> qui </a> per tornare alla home page </p>";
    ?>


</BODY>
</HTML>
