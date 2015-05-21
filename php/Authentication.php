<?php
class Authentication {


  public function AuthUser($user,$psw) {
    $QUERY_AUTH_USER = "SELECT * FROM Utente WHERE Username=\"$user\" AND Password=\"$psw\"";
    $response = mysql_query($QUERY_AUTH_USER);
    $num_rows = mysql_num_rows($response);

    if($num_rows == 1 )
      return true;

  return false;

  }

  public function AuthAdmin($user,$psw) {
    $QUERY_AUTH_ADMIN = "SELECT * FROM Admin WHERE  Username=\"$user\" AND Password=\"$psw\"";
    $response = mysql_query($QUERY_AUTH_ADMIN);
    $num_rows = mysql_num_rows($response);

    if($num_rows == 1 )
      return true;

  return false;

  }



}
?>
