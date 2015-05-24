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
      <ul>
        <li class="list-navigation-elements"> <a class="n-element" href="homepage.php"> Home </a></li>
        <li class="list-navigation-elements"> <a class="n-element" href="tops.php"> Più votate </a></li>
        <li class="list-navigation-elements"> <a class="select-element" href="categorie.php">Categorie </a></li>
      </ul>
    <div class="categories-navigator">
      <ul>
        <?php
          $querycategorie = "SELECT DISTINCT Categoria FROM Proposta ORDER BY Categoria";
          $responsecategorie = mysql_query($querycategorie) or die(mysql_error());
          $crow = mysql_fetch_assoc($responsecategorie);
          $maincategory = $crow["Categoria"];
          echo '<li class="list-navigation-elements"><a class="select-element" href="Categoriascelta.php?categoria='.$maincategory.'">'.$maincategory.'</a></li>';
          while($crow = mysql_fetch_assoc($responsecategorie))
            echo '<li class="list-navigation-elements"><a class="n-element" href="Categoriascelta.php?categoria='.$crow["Categoria"].'">'.$crow["Categoria"].'</a></li>';
         ?>
      </ul>
    </div>
      <div class="list-home">
        <?php
          $queryasd = "SELECT * FROM Proposta WHERE Categoria = '$maincategory' ORDER BY DataEffProposta DESC";
          $response = mysql_query($queryasd);
          while($row = mysql_fetch_assoc($response))
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
                      <p class="propose-textarea" >'.$string_helper->deleteText($row["Esposizione"],300).' </p>
                    </div>
                    <div class="item-footer">
                      <div class="item-date">
                        <p class="propose-label">'.date("d-m-Y",strtotime($row["DataEffProposta"])).'</p>
                      </div>
                      <div class="item-votes">
                        <p class="propose-label">Voto: '.$row["Voti"].' <a href="votepropose.php?ID='.$row["ID"].'"> + </a> </p> </p>
                      </div>

                    </div>
                  </div>'  ;


         ?>
      </div>
    </div>
    <div class="footer">
      <div class="footer-container">
      <div class="footer-paragraph"> Copyright (c) 2014 Copyright Holder All Rights Reserved. </div>
      <div class="logo-footer"> <img src="images/logo.png" width="50px" > </div>
    </div>
  </div>
  </div>


</body>
</html>
