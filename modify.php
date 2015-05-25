<HTML>
  <HEAD>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
    <link href="css/stylesheet.css" type="text/css" rel="stylesheet"/>
    <link href="css/styleform.css" type="text/css" rel="stylesheet"/>
    <link href="css/defaultstyle.css" type="text/css" rel="stylesheet"/>
    <?php
     include "php/Connection.php";
     session_start();
     $conn = new Connection();
     $conn->conn();
     $conn->selectDB("proposalsDatabase");
     $id = $_GET["id"];
     $query_to_get_data = "SELECT * FROM Proposta WHERE ID='$id'";
     $response = mysql_query($query_to_get_data);
     $row = mysql_fetch_assoc($response);
     ?>
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
          <label> <div class="element-container-header">Modifica proposta  </div></label>
          <label> <div class="element-container-proposta">  Titolo <input type="text" name="title" class="text" value=<?php echo $row["Titolo"] ?> ></div></label>
          <label> <div class="element-container-proposta"> Descrizione <textarea class="textstyle" name="proposta" rows="15" cols="170" > <?php echo $row["Esposizione"]?> </textarea></div> </label>
            <label> <div class="element-container-proposta"> Categoria <input type="text" name="title" class="text" value=<?php echo $row["Categoria"]?>></div></label>
            <div class="element-container-footer"><input type="submit" name="submit" value="Proponi" class="submit"></div>
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
