<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Political Proposals</title>
  <link href="css/stylesheet.css" rel="stylesheet" type="text/css">
  <link href="css/styleLogin.css" rel="stylesheet" type="text/css">
  <link href="css/defaultstyle.css" rel="stylesheet" type="text/css">
  <link href="css/styleform.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="container">
  <div class="topbar">
    <ul class="navigationBar">
      <li><a href="homepage.php">Home page</a></li>
    </ul>
  </div>
  <div class="divLogin">
    <form method="POST" action="redirect.php" onsubmit="return controllForm()" id="loginForm" name="mLoginForm">
      <fieldset class="fieldstyle"> <legend>Login</legend>
        <label>Username <br> <input type="text" name="userLog" id="idUserLog" class="text"> </label> <br> <br>
        <label>Password <br> <input type="password" name="pswLog" id="idPswLog" class="text"> </label> <br><br>
        <div class="inputDiv"><input type="submit" value="Invio" name="submit" id="subButton" class="submit"></div>
      </fieldset>
    </form>
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
</div>
</body>
</html>
