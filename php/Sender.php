<?php
    echo "$aemail $message $subj";

include "php/PHPMailer_5.2.0/class.phpmailer.php";

class Sender {

  private  $WEBMAIL = "webmaster.proposals@gmail.com";
  private  $WEBPSW = "Politicele";

  public function sendEmail($aemail,$message,$subj) {
    $mail = new PHPMailer;

    //Set PHPMailer to use SMTP.
    $mail->isSMTP();
    //Set SMTP host name
    $mail->Host = "smtp.gmail.com";
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;
    //Provide username and password
    $mail->Username = $this->WEBMAIL;  //indirizzo web master
    $mail->Password = $this->WEBPSW;
    //If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "tls";
    //Set TCP port to connect to
    $mail->Port = 587;
    $mail->From = $this->WEBMAIL;
    $mail->FromName = "WEB MASTER";
    $mail->addAddress($aemail);
    $mail->isHTML(false);
    $mail->Subject = $subj;
    $mail->Body = $message;

    return $mail->send();

  }
}
?>
