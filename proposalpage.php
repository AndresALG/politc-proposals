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
  $controller = new Controller();
  session_start();
  if(!isset($_SESSION["logged"])) {
    $_SESSION["logged"] = false;
  }
  $idp = $_GET["id"];
  $user = $_SESSION["user"];
  ?>
</head>
<body>
  <div class="container">
    <div class="topbar">
      <div class="titleDiv">
        <h1> <a href="index.php"> Politic Proposals </a> </h1>
      </div>
    </div>
    <div class="proposal-container">

      <div class="list">
        <?php
          $queryasd = "SELECT * FROM Proposta WHERE ID='$idp'";
          $response = mysql_query($queryasd);
          while($row = mysql_fetch_assoc($response)){
            echo '<div class="own-list-item">
                    <div class="title-item">
                      <div class="title-proposal">
                      <p class="proposal-label">'.$row["Titolo"].'</p>
                      <p class="proposal-label">'.$row["Categoria"].'</p>
                      </div>
                      <div class="author-proposal"><p class="proposal-label">'.$row["Autore"].'</p>
                      </div>
                    </div>
                    <div class="proposal">
                      <p class="proposal-textarea" >'.$row["Esposizione"].' </p>
                    </div>
                    <div class="item-footer">
                      <div class="item-date">
                        <p class="proposal-label">'.date("d-m-Y",strtotime($row["DataEffProposta"])).'</p>
                      </div>
                      <div class="item-votes">';
                        if(!$controller->controllVote($row["ID"],$_SESSION["user"]))
                          echo '<p class="proposal-label">voti: '.$row["Voti"].'</p>';
                        else
                          echo '<p class="proposal-label">voti: '.$row["Voti"].' <a href="voteproposal.php?ID='.$row["ID"].'"> + </a> </p>';

                      echo '</div>
                      </div>
                    </div>';}
         ?>
      </div>
    </div>
    <?php
    $query = "SELECT * FROM Commento WHERE IDProposta='$idp' ORDER BY DataEffCommento DESC";
    $responsee = mysql_query($query);
    echo '<div class="comments-container">
            <div class="list-comments">
              <div class="comment-list-item">
                <div class="title-item">
                  <div class="title-comment">
                    <textarea class="comment-textarea" name="comment" id="comment" cols="70" rows="2" onclick="return removeString()">Inserisci commento</textarea>
                    <button class="send-comment" onclick="sendcomment()"> invio </button>
                  </div>
                </div>';
                while($rows=mysql_fetch_assoc($responsee)){
                echo '<div class="title-item-comment">
                          <div class="title-comment">';
                          if($rows["IDUtente"] != null)
                            echo '<p class="comment-label">'.$rows["IDUtente"].'</p>';
                          else {
                            echo '<p class="comment-label-admin">'.$rows["IDAdmin"].'</p>';
                          }
                          echo '</div>
                          <div class="date-comment"><p class="comment-label">'.date("d-m-Y",strtotime($rows["DataEffCommento"])).'</p>
                          </div>
                        </div>
                        <div class="comment">
                          <p class="proposal-textarea" >'.$rows["Descrizione"].' </p>
                          </div> ';
              }
    echo      '</div>
            </div>
          </div>  '
     ?>
     <div class="footer">
       <div class="footer-container">
       <div class="footer-paragraph"> Copyright (c) 2014 Copyright Holder All Rights Reserved. </div>
       
     </div>
   </div>
  </div>

  <script >
    function removeString(){
      var check = document.getElementById("comment").value;
      if( check == "Inserisci commento")
        document.getElementById("comment").value = "";

      else {
        return true;
      }

    }

    function sendcomment() {
      var idproposta = '<?php echo $idp?>';
      var utente = '<?php echo $user?>';
      var data = '<?php echo date("Y-m-d:H:i:s")?>';
      var commento = document.getElementById('comment').value;

      var link = "postcomment.php?id="+idproposta+"&user="+utente+"&comment="+commento+"&data="+data;
      location.href = link;
      return true;

    }


  </script>
</body>
</html>
