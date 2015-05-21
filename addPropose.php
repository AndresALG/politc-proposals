<HTML>

  <HEAD>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
    <link href="css/stylesheet.css" type="text/css" rel="stylesheet"/>
    <link href="css/stylenewpropose.css" type="text/css" rel="stylesheet"/>
    <link href="css/styleform.css" type="text/css" rel="stylesheet"/>
    <link href="css/defaultstyle.css" type="text/css" rel="stylesheet"/>
  </HEAD>
  <BODY>
    <div class="container">
      <div class="topbar">
        <div class="titleDiv">
          <h1> <a class="dstyle" href="homepage.php"> Politic Proposals </a> </h1>
        </div>
      </div>
      <div class="propose">
        <form id="container" method="post" action="sendPropose.php" onsubmit="return controll()">
          <fieldset class="fieldstyle"> <legend class="lstyle"> Proposta </legend>
            <div class="title"> <label> Titolo <input type="text" name="title" class="text" ></label> </div>
            <div class="description"> <p class="pstyle"> Descrizione </p> <textarea class="textstyle" name="proposta" rows="15" cols="170"> </textarea></div>
            <div class="idivstyle"><input type="submit" name="submit" value="Proponi" class="submit"></div>
          </fieldset>
        </form>
      </div>
    </div>
  </BODY>
</HTML>
