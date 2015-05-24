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
  include 'php/Stringhelper.php';
  $data=new Connection();
  $data->conn();
  $data->selectDB("proposalsDatabase");
  $string_helper = new StringHelper();
  session_start();
  if(!isset($_SESSION["logged"])) {
    $_SESSION["logged"] = false;
  }
  if(!isset($_SESSION["user"])) {
    $_SESSION["user"] = "anonymous";
  }
  ?>
</head>
<body>
  <div class="container">
    <div class="topbar">
      <div class="titleDiv">
        <h1> <a href="homepage.php"> Politic Proposals </a> </h1>
      </div>
      <ul class="navigatorBar">
        <?php
        if(!$_SESSION["logged"]) {
          echo '<li><a href="registrati.php">Registrati</a></li>
          <li><a href="login.php">Login</a></li>';
        }
        else if (!$_SESSION["admin"]) {
          echo '<li><a href="logout.php">Logout</a></li>
          <li><a href="createpropose.php">Proponi </a></li>
          <li><a href="mypage.php">Benvenuto '.$_SESSION["user"].'</a></li>';
        }
        else {
          echo '<li><a href="logout.php">Logout</a></li>
          <li><a href="convalida.php">Convalida proposta </a></li>
          <li><a href="mypage.php">Benvenuto '.$_SESSION["user"].'</a></li>';
        }
        ?>
      </ul>
    </div>
    <div class="propose-container">
      <ul class="navigatorbar-elements">
        <li class="list-navigation-elements"> <a class="select-element" href="homepage.php"> Home </a></li>
        <li class="list-navigation-elements"> <a class="n-element" href="tops.php"> Più votate </a></li>
        <li class="list-navigation-elements"> <a class="n-element" href="category.php">Categorie </a></li>
      </ul>


      <div class="list-home">
        <?php
          $queryasd = "SELECT * FROM Proposta ORDER BY DataEffProposta DESC";
          $response = mysql_query($queryasd);
          while($row = mysql_fetch_assoc($response))
          //$row = mysql_fetch_assoc($response);
          //for($i=0; $i<10; $i++)
            echo '<div class="list-item">
                    <div class="title-item">
                      <div class="title-propose">
                      <p class="propose-label">  <a href="propostapage.php?id='.$row["ID"].'"class="item-link">'.$row["Titolo"].'</a></p>
                      <p class="propose-label">'.$row["Categoria"].'</p>
                      </div>
                      <div class="author-propose"><p class="propose-label">'.$row["Autore"].'</p>
                      </div>
                    </div>
                    <div class="propose">
                      <p class="propose-textarea" >'.$string_helper->deleteText($row["Esposizione"]).' </p>
                    </div>
                    <div class="item-footer">
                      <div class="item-date">
                        <p class="propose-label">'.date("d-m-Y",strtotime($row["DataEffProposta"])).'</p>
                      </div>
                      <div class="item-votes">
                        <p class="propose-label">Voto: '.$row["Voti"].' <a href="votepropose.php?auth='.$row["Autore"].'&title='.$row["Titolo"].'"> + </a> </p>
                      </div>

                    </div>
                  </div>'  ;


         ?>
      </div>
    </div>
    <div class="footer">
      <p class="footer-paragraph"> Copyright (c) 2014 Copyright Holder All Rights Reserved. </p>
    </div>
  </div>


</body>
</html>
