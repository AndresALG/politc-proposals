<?php

class Connection {

  private $nameServer = "localhost";
  private $userServer = "root";
  private $pswServer = "xaldin";

  private $active = false;

  public function conn() {
    if(!$this->active) {
      mysql_connect($this->nameServer,$this->userServer,$this->pswServer) or die("Server not found");
      $this->active = true;
    }
  return true;
  }

  public function selectDB($nameDB) {
    mysql_select_db($nameDB) or die("Database not found");

  }

  public function closeConn(){
    if(!$this->active) {
      $this->active = false;
      mysql_close();
    }
  return true;
  }

}

class Registration {

  public function ControllNewUser($user){
    $QUERY_CONTROLL = "SELECT * FROM Utente WHERE username=\"$user\"";
    $response = mysql_query($QUERY_CONTROLL);
    $num_rows = mysql_num_rows($response);

    if($num_rows == 0)
      return true;

    return false;

  }

  public function AddNewUser($user,$psw,$pmail,$name,$lname,$bdate,$pbirth){
    $QUERY_ADD = "INSERT INTO Utente VALUES ('$user','$psw','$pmail','$name','$lname','$bdate','$pbirth')";

    $response = mysql_query($QUERY_ADD) or die(mysql_error());

    return $response;

  }

  public function ControllNewAdmin($admin){
    $QUERY_CONTROLL = "SELECT * FROM Admin WHERE username=\"$admin\"";
    $response = mysql_query($QUERY_CONTROLL);
    $num_rows = mysql_num_rows($response);

    if($num_rows == 0)
      return true;

    return false;

  }

  public function AddNewAdmin($user,$psw,$pmail,$name,$lname,$bdate){
    $QUERY_ADD = "INSERT INTO Admin VALUES ('$user','$psw','$pmail','$name','$lname','$bdate')";

    $response = mysql_query($QUERY_ADD) or die(mysql_error());

    return $response;

  }

}

class Post {

  public function addproposal($author,$title,$proposta,$categoria,$admin,$data) {
    $QUERY = "INSERT INTO Proposta(Autore,Titolo,Esposizione,Categoria,AdminResponsabile,DataEffProposta) VALUES ('$author','$title','$proposta','$categoria','$admin','$data')";
    $response = mysql_query($QUERY) or die(mysql_error());

    return $response;
  }

  public function removerproposal($autor,$title) {

  }


}


class Chooser {

  public function chooseAdminEmail(){

    $qcountAdmins = "SELECT FLOOR(RAND() * COUNT(*)) AS `offset` FROM Admin ";
    $response = mysql_query($qcountAdmins);
    $offset_row = mysql_fetch_object( $response );
    $offset = $offset_row->offset;
    $result = mysql_query( " SELECT * FROM `Admin` LIMIT $offset, 1 " );
    $row = mysql_fetch_assoc($result);
    return $row["Email"];
  }

}

class Controller{

  public function controllVote($ID,$USER){

    $query_controll = "SELECT * FROM Propostavotata WHERE IDProposta='$ID' AND NomeUtente='$USER'";
    $response=mysql_query($query_controll);
    $rows = mysql_num_rows($response);
    if( $rows == 0) {
      return true;
    }

    return false;



  }

}

?>
