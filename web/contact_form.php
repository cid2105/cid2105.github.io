<?php

require 'vendor/autoload.php';

$to = "cole.ian.diamond@gmail.com";
$subject = "[colediamond.com] Message from " . $_POST["name"];
$txt = $_POST["message"];
$headers = "From: " . $_POST["from"]

$sendgrid = new SendGrid(getenv('SENDGRID_USERNAME'), getenv('SENDGRID_PASSWORD'));
$message = new SendGrid\Email();
$message->addTo('cole.ian.diamond@gmail.com')->
          setFrom($from)->
          setSubject($subject)->
          setText($txt)->
          setHtml($txt);
$response = $sendgrid->send($message);
?>
