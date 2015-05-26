<!DOCTYPE html>
<html>
<head>
  <script>

  function controll() {
    var psw = document.forms["rform"]["password"].value;
    var rpsw = document.forms["rform"]["rpassword"].value;
    var email = document.forms["rform"]["email"].value;
    var remail = document.forms["rform"]["remail"].value;

    if( psw === rpsw)
      return true;
    else {
      alert("Le password non coincidono");
      return false;
    }

    if ( email === remail)
      return true;
    else {
      alert("Gli indirizzi email sono differenti")
      return false;
    }
  }

  </script>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
  <link rel="stylesheet" type="text/css" href="css/styleform.css">
  <link rel="stylesheet" type="text/css" href="css/defaultstyle.css">
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
  <title></title>
</head>
<body>
  <div class="container">
  <div class="topbar">
    <div class="titleDiv">
      <h1> <a href="index.php"> Political Proposals </a> </h1>
    </div>
</div>
<div class="form-container">
    <form action="rconfirm.php" method="post" onsubmit="return controll()" name="rform">
      <label><div class="element-container-header">Registrazione  </div></label>
        <label><div class="element-container-registration"> Username: <div class="textbox-registration"><input name="username" type="text" class="text" required /></div> </div></label>
        <label><div class="element-container-registration">Password: <div class="textbox-registration"><input name="password" type="password" class="text" required/></div></div></label>
        <label><div class="element-container-registration"> Conferma password: <div class="textbox-registration"><input name="rpassword" type="password" class="text" required/></div></div></label>
        <label><div class="element-container-registration"> Email:<div class="textbox-registration"><input name="email" type="email" class="text" required></div></div></label>
        <label><div class="element-container-registration"> Conferma email: <div class="textbox-registration"><input name="remail" type="email" class="text" required></div></div></label>
        <label><div class="element-container-registration"> Nome: <div class="textbox-registration"><input name="nome" type="text" class="text" required></div></div></label>
        <label><div class="element-container-registration"> Cognome: <div class="textbox-registration"><input name="cognome" type="text" class="text" required/></div></div></label>
        <label><div class="element-container-registration"> Data di nascita: <div class="textbox-registration"><input name="datan" type="date" class="text" required/></div></div></label>
        <label><div class="element-container-registration"> Luogo di nascita: <div class="textbox-registration"> <input name="luogon" type="text"class="text" required/></div></div></label>
        <div class="element-container-footer"><input type="submit" value="Registrati" name="submit"  class="submit"></div>
    </form>
  </div>
  <div class="footer">
    <div class="footer-container">
    <div class="footer-paragraph"> Copyright (c) 2014 Copyright Holder All Rights Reserved. </div>
    
  </div>
</div>
</div>
</body>
</html>
