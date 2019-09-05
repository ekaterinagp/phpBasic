<?php

$sAgentID = '11';
$sactivationKey = '12345';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'src/PHPMailer.php';
require 'src/Exception.php';
require 'src/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
  //Server settings
  $mail->SMTPDebug = 2;                                       // Enable verbose debug output
  $mail->isSMTP();
  $mail->Mailer = "smtp";


  // Set mailer to use SMTP
  $mail->Host = "ssl://smtp.gmail.com";  // Specify main and backup SMTP servers
  $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
  $mail->Username   = 'wkea108@gmail.com';                     // SMTP username
  $mail->Password   = '108108kea';                               // SMTP password
  $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
  $mail->Port       = 587;                                    // TCP port to connect to

  //Recipients
  $mail->setFrom('wkea108@gmail.com', 'KEA VERIFY TEST');
  $mail->addAddress('wkea108@gmail.com', 'KEA KEA');     // Add a recipient
  // $mail->addAddress('ellen@example.com');               // Name is optional
  // $mail->addReplyTo('dummy@gmail.com', 'Information');
  // $mail->addCC('cc@example.com');
  // $mail->addBCC('bcc@example.com');

  // Attachments
  // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
  // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

  // Content
  $mail->isHTML(true);
  // Set email format to HTML
  $sPath = "http://localhost/activate-email/api-deactivate-account.php?id=$sAgentID&key=$sactivationKey";
  $mail->Subject = 'New property for you';
  $mail->Body    = 'Welcome,' . $sAgentID . 'there are new properties for you. 
  Price:120, Address: brabrabra. click here to deactivate profile <a href="' . $sPath . '"></a>';
  // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  $mail->send(); // Send the email
  echo 'Message has been sent';
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
