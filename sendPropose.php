<HTML>
  <HEAD>
    <link href="css/defaultstyle.css" type="text/css" rel="stylesheet">
    <?php
    include "php/Sender.php";
    include "php/Connection.php";
    session_start();
    date_default_timezone_set('UTC');
    $title = $_POST["title"];
    $propose = $_POST["proposta"];
    $user = $_SESSION["user"];
    $date = date('d-m-Y');
    $adminemail = "loaizaandres96@gmail.com";
    $subject ="Propose from ".$user;
    $date = date('m-d-Y'); //mounth day year;
    $message = "titolo: ".$title."\n Autore: ".$user."\n Proposta: \r\n".$propose."\n Data:".$date;
    $sender = new Sender();
    ?>
  </HEAD>

  <BODY>

    <?php
      if($sender->sendEmail($adminemail,$message,$subject))
        echo "<p> Proposta inviata con successo !</p>";
      else
        echo "<p> Errori durante l'invio per favore rimprova più tardi</p>";

        echo "<p> Premi <a href=\"homepage.php\"> qui </a> per tornare alla home page </p>";
        header("refresh:5, url=homepage.php");
    ?>


</BODY>
</HTML>
