<?php

$name = $_POST['name'];
$visiter_email = $_POST['email'];
$visitor_number = $_POST['number'];
$date_needed = $_POST['date'];
$time_needed = $_POST['time'];
$message = $_POST['message'];


$email_from = 'visitor@calliedesigns.com';
$email_subject = "New Form Submission";
$email_body = "You have received a new message from the user $name and their contact info: $visiter_email and $visitor_number \n Here is the message: \n $message.";

$to = "calliedesigns42@gmail.com";
$headers = "from: $email_from \r\n";
$headers = "Reply-to: $visiter_email \r\n";


mail($to, $email_subject, $email_body, $headers);
header('Location: thank-you.html');

function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?>
