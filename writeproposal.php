<HTML>
  <HEAD>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
    <link href="css/stylesheet.css" type="text/css" rel="stylesheet"/>
    <link href="css/styleform.css" type="text/css" rel="stylesheet"/>
    <link href="css/defaultstyle.css" type="text/css" rel="stylesheet"/>

  </HEAD>
  <BODY>
    <div class="container">
      <div class="topbar">
        <div class="titleDiv">
          <h1> <a class="dstyle" href="index.php"> Politic Proposals </a> </h1>
        </div>
      </div>
      <div class="form-container-proposta">
        <form method="post" action="sendproposal.php" onsubmit="return controll()" name="form">
          <label><div class="element-container-header"> Proponi  </div></label>
          <label>   <div class="element-container-proposta">  Titolo <input type="text" name="title" class="text" ></div></label>
          <label>  <div class="element-container-proposta"> Descrizione <textarea class="textstyle" name="proposta" rows="15" cols="170" > </textarea></div> </label>
            <label> <div class="element-container-proposta"> Categoria <select name="category">
                                    <option value="null"> --- </option>
                                    <option value="Finanza"> Finanza </option>
                                    <option value="Economia"> Economia </option>
                                    <option value="Istruzione"> Instruzione </option>
                                  </select> </div>
                                  </label>
            <div class="element-container-footer"><input type="submit" name="submit" value="Invia proposta" class="submit"></div>
        </form>
      </div>
    </div>
  </BODY>
</HTML>

<script>
  function controll(){
    var valueC = document.forms["form"]["category"].value;
    if( valueC == "null"){
      alert("Scegliere una categoria !");
      return false;
    }
  }
</script>
