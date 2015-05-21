<?php

class Connection {

  private $nameServer = "localhost";
  private $userServer = "root";
  private $pswServer = "96fgh96";

  private $active = false;

  public function conn() {
    if(!$this->active) {
      mysql_connect($this->nameServer,$this->userServer,$this->pswServer) or die("Server doesn't found");
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

}

class Proposing {

  public function addPropose($autor,$title,$propose,$categoria,$admin,$data) {

  }

  public function removerPropose($autor,$title) {

  }

}



?>
