<!DOCTYPE html>
<html>
<head>
  <?php session_start(); ?>
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
  <meta charset="utf-8">
  <title> <?php echo $_SESSION["user"]."'s"; ?> page</title>
  <link href="css/stylesheet.css" rel="stylesheet" type="text/css">
  <link href="css/defaultstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
  <div class="topbar">
    <div class="titleDiv">
      <h1> <a href="homepage.php"> Politic Proposals </a> </h1>
    </div>
    <ul class="navigatorBar">
      <?php
      if (!$_SESSION["admin"]) {
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

  <ul class="navigatorbar-elements">
    <li class="list-navigation-elements"> <a class="select-element" href="homepage.php"> Le mie proposte </a></li>
    <li class="list-navigation-elements"> <a class="n-element" href="tops.php"> Più votate </a></li>
    <li class="list-navigation-elements"> <a class="n-element" href="category.php">Categorie </a></li>
  </ul>
  <div>
  <?php  ?>

  </div>
</div>

</body>
</html>
