<?php
require 'vendor/autoload.php';
$secret = getenv('RECAPTCHA_SECRET');
$recaptcha = new \ReCaptcha\ReCaptcha($secret);
$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
if ($resp->isSuccess()) {
    sendEmail();
    print "Email sent successfully.";
} else {
    foreach ($resp->getErrorCodes() as $code) {
    	echo '<tt>' . $code . '</tt> ';
    }
}

function sendEmail() {
	$sendgrid = new SendGrid(getenv('SENDGRID_USERNAME'), getenv('SENDGRID_PASSWORD'));

	$message = new SendGrid\Email();
	$message->addTo($to)->
		  setFrom($from)->
		  setSubject($subject)->
		  setText($text)->
		  setHtml($text);
	$response = $sendgrid->send($message);
	return True;
}
?>

