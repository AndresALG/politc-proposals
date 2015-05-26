<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
  <meta charset="utf-8">
  <title>Political Proposals</title>
  <link href="css/stylesheet.css" rel="stylesheet" type="text/css">
  <link href="css/defaultstyle.css" rel="stylesheet" type="text/css">
  <link href="css/styleform.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="container">
    <div class="topbar">
      <div class="titleDiv">
        <h1> <a href="index.php"> Politic Proposals </a> </h1>
      </div>
    </div>
    <div class="form-container">
      <form method="POST" action="redirect.php" onsubmit="return controllForm()" name="mLoginForm" >
        <label><div class="element-container-header">Login  </div></label>
        <label><div class="element-container-login">Username <br> <input type="text" name="userLog" id="idUserLog" class="text"> </label> </div>
        <label><div class="element-container-login">Password <br> <input type="password" name="pswLog" id="idPswLog" class="text"> </label> </div>
        <div class="element-container-footer"><input type="submit" value="Invio" name="submit" id="subButton" class="submit"> </div>
      </form>
    </div>

    <div class="footer">
      <div class="footer-container">
      <div class="footer-paragraph"> Copyright (c) 2014 Copyright Holder All Rights Reserved. </div>
      
    </div>
  </div>

  </div>

  <script>
  function controllForm() {
    var user = document.forms["mLoginForm"]["userLog"].value;
    var psw = document.forms["mLoginForm"]["pswLog"].value;

    if( user== "" || psw=="" || user == null || psw==null){
      alert("Ci sono alcuni campi vuoti");
      return false;
    }
    return true;

  }
  </script>
</body>
</html>
