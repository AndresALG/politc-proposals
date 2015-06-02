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
  $controller = new controller();
  session_start();
  if(!isset($_SESSION["logged"])) {
    $_SESSION["logged"] = false;
  }
  if(!isset($_SESSION["user"])) {
    $_SESSION["user"] = "anonymous";
  }
  $categorias = $_GET["categoria"];
  ?>
</head>
<body>
  <div class="container">
    <div class="topbar">
      <div class="titleDiv">
        <h1> <a href="index.php"> Political Proposals </a> </h1>
      </div>
      <ul class="navigatorbar">
        <?php
        if(!$_SESSION["logged"]) {
          echo '<li><a href="registrati.php">Registrati</a></li>
          <li><a href="login.php">Login</a></li>';
        }
        else if (!$_SESSION["admin"]) {
          echo '<li><a href="logout.php">Logout</a></li>
          <li><a href="writeproposal.php">Proponi </a></li>
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
    <div class="proposal-container">
      <ul>
        <li class="list-navigation-elements"> <a class="n-element" href="index.php"> Home </a></li>
        <li class="list-navigation-elements"> <a class="n-element" href="tops.php"> Più votate </a></li>
        <li class="list-navigation-elements"> <a class="select-element" href="categorie.php">Categorie </a></li>
      </ul>
    <div class="categories-navigator">
      <ul>
        <?php
          $querycategorie = "SELECT DISTINCT Categoria FROM Proposta ";
          $responsecategorie = mysql_query($querycategorie) or die(mysql_error());
          while($crow = mysql_fetch_assoc($responsecategorie)) {
            if($crow["Categoria"] !== $categorias){
            echo '<li class="list-navigation-elements"><a class="n-element" href="Categoriascelta.php?categoria='.$crow["Categoria"].'">'.$crow["Categoria"].'</a></li>';
            }
            else {
              echo '<li class="list-navigation-elements"><a class="select-element" href="Categoriascelta.php?categoria='.$crow["Categoria"].'">'.$crow["Categoria"].'</a></li>';
            }

          }
         ?>
      </ul>
    </div>
      <div class="list-home">
        <?php
          $queryasd = "SELECT * FROM Proposta WHERE Categoria = '$categorias' ORDER BY DataEffProposta DESC";
          $response = mysql_query($queryasd);
          while($row = mysql_fetch_assoc($response)){
            echo '<div class="list-item">
                    <div class="title-item">
                      <div class="title-proposal">
                      <p class="proposal-label">  <a href="proposalpage.php?id='.$row["ID"].'"class="item-link">'.$row["Titolo"].'</a></p>
                      <p class="proposal-label">'.$row["Categoria"].'</p>
                      </div>
                      <div class="author-proposal"><p class="proposal-label">'.$row["Autore"].'</p>
                      </div>
                    </div>
                    <div class="proposal">
                      <p class="proposal-textarea" >'.$string_helper->deleteText($row["Esposizione"],300).' </p>
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
                  </div>';
                }


         ?>
      </div>
    </div>
    <div class="footer">
      <div class="footer-container">
      <div class="footer-paragraph"> Copyright (c) 2014 Copyright Holder All Rights Reserved. </div>
    </div>
  </div>
  </div>


</body>
</html>
