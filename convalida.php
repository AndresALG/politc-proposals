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
    <div class="form-container-proposta">
      <form  method="post" action="addpropose.php" onsubmit="return controll()" name="form">
        <label><div class="element-container-header">Convalida proposta  </div></label>
          <label><div class="element-container-proposta"> Titolo <div class="textbox-proposta"> <input type="text" name="title" class="text" > </div></div></label>
          <label><div class="element-container-proposta"> Autore <div class="textbox-proposta"><input type="text" name="author" class="text"> </div></div></label>
          <label><div class="element-container-proposta"> Data <div class="textbox-proposta"><input type="text" name="data" class="text"></div></div></label>
          <label><div class="element-container-proposta"> Descrizione <textarea class="textstyle" name="proposta" rows="15"> </textarea></div></label>
          <label><div class="element-container-proposta"> Categoria <select name="category">
                                  <option value="null"> --- </option>
                                  <option value="Finanzia"> Finanzia </option>
                                  <option value="Economia"> Economia </option>
                                  <option value="Istruzione"> Instruzione </option>
                                </select> </div></label>
                                <label><div class="element-container-footer"><input type="submit" name="submit" value="Proponi" class="submit"></div></label>
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
