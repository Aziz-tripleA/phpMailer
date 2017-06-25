<?php

require 'PHPMailerAutoload.php';

/*use PHPMailer;*/

$mail = new PHPMailer();

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'aziz.adel.fci';                 // SMTP username
$mail->Password = '11.aziz.11';                           // SMTP password
$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to


$mail->setFrom('atfih.org@egdata.net', 'Mailer');
$mail->addAddress('azizadel239@yahoo.com', 'Joe User');     // Add a recipient         
/*$mail->addReplyTo('info@example.com', 'Information');*/
/*$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');*/


$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>

