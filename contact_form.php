<?php
require 'vendor/autoload.php';

processInput();

function processInput(){
	$secret = getenv('RECAPTCHA_SECRET');
	$recaptcha = new \ReCaptcha\ReCaptcha($secret);
	//$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
	if (true) {
    	$sendgrid_resp = sendEmail("cole@colediamond.com",
    								 $_POST['email'], 
    								 "Email from " . $_POST['name'],
    								 $_POST['message']);
    	print "Email sent successfully.";
    	print $sendgrid_resp;
	} else {
    	foreach ($resp->getErrorCodes() as $code) {
    		echo '<tt>' . $code . '</tt> ';
    	}
	}
	//header( 'Location: http://www.colediamond.com/' ) ;
}

function sendEmail($to, $from, $subject, $text) {
	$sendgrid = new SendGrid(getenv('SENDGRID_USERNAME'), getenv('SENDGRID_PASSWORD'));
	$message = new SendGrid\Email();
	$message->addTo($to)->
		  setFrom($from)->
		  setSubject($subject)->
		  setText($text)->
		  setHtml($text);
	$response = $sendgrid->send($message);
	echo $response;
	return $response;
}
?>

