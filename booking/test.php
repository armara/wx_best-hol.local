<?php

require_once ("../vendor/autoload.php");

// Create the Transport
// $transport = (new Swift_SmtpTransport('mail@best-holiday.am', 26))
//   ->setUsername('admin@best-holiday.am')
//   ->setPassword('$admin2020')
// ;

$transport = new Swift_SendmailTransport('/usr/sbin/exim -bs');
//Path to Sendmail ->	/usr/sbin/sendmail (Server information)


// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Booking confirmation'))
  ->setFrom(['admin@best-holiday.am' => 'Best Holiday'])
  // ->setTo(['armen@webex.am' => 'Armen Arakelyan', 'info@best-holiday.am'])
  ->setTo(['armen@webex.am' => 'Armen Arakelyan'])
  ->setBody('Here is the message itself locale')
  ;

// Send the message
$result = $mailer->send($message);