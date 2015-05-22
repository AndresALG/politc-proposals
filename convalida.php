<!DOCTYPE html>
<html>
<head>
  <title>Political Proposals</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
  <link href="css/stylesheet.css" rel="stylesheet" type="text/css">
  <link href="css/defaultstyle.css" rel="stylesheet" type="text/css">
  <link href="css/styleform.css" rel="stylesheet" type="text/css">
  <link href="css/stylepropose.css" type="text/css" rel="stylesheet"/>
</head>
<body>
  <div class="container">
    <div class="topbar">
      <div class="titleDiv">
        <h1> <a class="dstyle" href="homepage.php"> Politic Proposals </a> </h1>
      </div>
    </div>
    <div class="propose">
      <form class="form-container" method="post" action="addpropose.php" onsubmit="return controll()" name="form">
        <fieldset class="fieldstyle"> <legend class="lstyle"> Proposta </legend>
          <div class="title"> <label> Titolo <div class="textbox"> <input type="text" name="title" class="text" > </div></label> </div> <br>
          <div class="title"> <label> Autore <div class="textbox"><input type="text" name="author" class="text"> </div></label> </div> <br>
          <div class="title"> <label> Data <div class="textbox"><input type="text" name="data" class="text"></div></label> </div>
          <div class="description"> <p class="pstyle"> Descrizione </p> <textarea class="textstyle" name="proposta" rows="15" cols="170"> </textarea></div><br>
          <div > <label> Categoria<select name="category">
                                  <option value="null"> --- </option>
                                  <option value="Finanzia"> Finanzia </option>
                                  <option value="Economia"> Economia </option>
                                  <option value="Istruzione"> Instruzione </option>
                                </select> </label>
                              </div>
          <div style="text-align:right;"><input type="submit" name="submit" value="Proponi" class="submit"></div>
        </fieldset>
      </form>
    </div>
  </div>
</body>

<script>
  function controll(){
    var valueC = document.forms["form"]["category"].value;
    if( valueC == "null"){
      alert("Scegliere una categoria !");
      return false;
    }
  }
</script>
</html>
