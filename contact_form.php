<?php
require 'vendor/autoload.php';

$to = "cole.ian.diamond@gmail.com";
$from = $_POST['email'];
$subject = "[colediamond.com] Message from {$_POST['name']} ({$from})";
$text = $_POST['message'];

$sendgrid = new SendGrid(getenv('SENDGRID_USERNAME'), getenv('SENDGRID_PASSWORD'));

$message = new SendGrid\Email();
$message->addTo($to)->
          setFrom($from)->
          setSubject($subject)->
          setText($text)->
          setHtml($text);
$response = $sendgrid->send($message);
?>
