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
      <h1> <a href="homepage.php"> Politic Proposals </a> </h1>
    </div>
</div>
  <div class="formdiv">
    <form action="rconfirm.php" method="post" onsubmit="return controll()" name="rform">
      <fieldset class="fieldstyle"><legend> Registrazione </legend>

        <label> Username: <div class="textbox"><input name="username" type="text" class="text" required /></div></label> <br> <br>
        <label> Password: <div class="textbox"><input name="password" type="password" class="text" required/></div></label> <br> <br>
        <label> Conferma password: <div class="textbox"><input name="rpassword" type="password" class="text" required/></div></label><br><br>
        <label> Email:<div class="textbox"><input name="email" type="email" class="text" required></div></label>  <br> <br>
        <label> Conferma email: <div class="textbox"><input name="remail" type="email" class="text" required></div></label><br><br>
        <label> Nome: <div class="textbox"><input name="nome" type="text" class="text" required></div></label>  <br> <br>
        <label> Cognome: <span><div class="textbox"><input name="cognome" type="text" class="text" required/></div></label>  <br> <br>
        <label> Data di nascita: <div class="textbox"><input name="datan" type="date" class="text" required/></div></label>  <br> <br>
        <label> Luogo di nascita: <div class="textbox"> <input name="luogon" type="text"class="text" required/></div></label> <br> <br>

      </fieldset> <br> <br>
      <div class="inputDiv"><input type="submit" value="Registrazione" name="submit"  class="submit"></div>
    </form>
  </div>
</div>
</body>
</html>
