<?php
$to = "cole.ian.diamond@gmail.com";
$subject = "[colediamond.com] Message from " . $_POST["name"];
$txt = $_POST["message"];
$headers = "From: " . $_POST["from"]

mail($to,$subject,$txt,$headers);
?>
