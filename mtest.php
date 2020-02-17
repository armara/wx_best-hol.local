<?php

// Load Composer's autoloader
require 'vendor/autoload.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


try {
  //Server settings
  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
  $mail->isSMTP();                                            // Send using SMTP
  $mail->Host       = 'mail.best-holiday.am';                    // Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
  $mail->Username   = 'admin@best-holiday.am';                     // SMTP username
  $mail->Password   = '$admin2020';                               // SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
  $mail->Port       = 26;                                    // TCP port to connect to

  //Recipients
  $mail->setFrom('admin@best-holiday.am', 'Best Holiday');
  $mail->addAddress('armen@webex.am', 'Arm Arakelyan');     // Add a recipient
  // $mail->addAddress('ellen@example.com');               // Name is optional
  $mail->addReplyTo('admin@best-holiday.com', 'Best Holiday');
  // $mail->addCC('cc@example.com');
  // $mail->addBCC('bcc@example.com');

  // Attachments
  // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
  // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

  // Content
  $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = 'Booking confirmation';
  $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  $mail->send();
  echo 'Message has been sent';
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}