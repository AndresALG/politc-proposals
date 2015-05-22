<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
  <meta charset="utf-8">
  <title>Political Proposals</title>
  <link href="css/stylesheet.css" rel="stylesheet" type="text/css">
  <link href="css/defaultstyle.css" rel="stylesheet" type="text/css">
  <?php
  include 'php/Connection.php';
  $data=new Connection();
  $data->conn();
  $data->selectDB("proposalsDatabase");
  session_start();
  if(!isset($_SESSION["logged"])) {
    $_SESSION["logged"] = false;
  }
  $id = $_GET["id"];
  ?>
</head>
<body>
  <div class="container">
    <div class="topbar">
      <div class="titleDiv">
        <h1> <a href="homepage.php"> Politic Proposals </a> </h1>
      </div>
    </div>
    <div class="propose-container">

      <div class="list">
        <?php
          $queryasd = "SELECT * FROM Proposta WHERE ID='$id'";
          $response = mysql_query($queryasd);
          while($row = mysql_fetch_assoc($response))
          //$row = mysql_fetch_assoc($response);
          //for($i=0; $i<10; $i++)
            echo '<div class="own-list-item">
                    <div class="title-item">
                      <div class="title-propose">
                      <p class="propose-label">'.$row["Titolo"].'</p>
                      <p class="propose-label">'.$row["Categoria"].'</p>
                      </div>
                      <div class="author-propose"><p class="propose-label">'.$row["Autore"].'</p>
                      </div>
                    </div>
                    <div class="propose">
                      <p class="propose-textarea" >'.$row["Esposizione"].' </p>
                    </div>
                    <div class="item-footer">
                      <div class="item-date">
                        <p class="propose-label">'.$row["DataEffProposta"].'</p>
                      </div>
                      <div class="item-votes">
                        <p class="propose-label">Voto: '.$row["Voti"].' <a href="votepropose.php?auth='.$row["Autore"].'&title='.$row["Titolo"].'"> + </a> </p>
                      </div>

                    </div>
                  </div>';
         ?>
      </div>
    </div>
    <?php
    $query = "SELECT * FROM Commento WHERE ";

    echo '<div class="comments-container">
            <div class="list">
              <div class="own-list-item">
                <div class="title-item">
                  <div class="title-comment">
                    <textarea class="comment-text-area" name="comment" id="comment" cols="72" rows="2" onclick="return removeString()">Inserisci commento</textarea>
                    <button class="send-comment" onclick="return sendcomment()"> invio </button>
                  </div>
                </div>';

    echo      '</div>
            </div>
          </div>  '
     ?>
    <div class="footer">
      <p class="footer-paragraph"> Copyright (c) 2014 Copyright Holder All Rights Reserved. </p>
    </div>
  </div>

  <script >
    function removeString(){
      var check = document.getElementById("comment").value;
      if( check == "Inserisci commento"){
        document.getElementById("comment").value = "";
        var utente = <?php echo $_SESSION["user"]; ?>;
        var commento = document.getElementById('comment');
        alert(utente);}
      else {
        return true;
      }

    }

    function sendcomment() {
      var utente = '<?php echo "root"  ?>';
      var commento = document.getElementById('comment');
      alert(utente);
      return false;

    }


  </script>
</body>
</html>
