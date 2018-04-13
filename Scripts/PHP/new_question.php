<?php
$email = 'email';
$subject = 'Question in my site';
$text = $_POST['text']."\r\n".'From: '.$_POST['email']."\r\n Name: ".$_POST['name'];

$mail = mail($email, $subject, $text);

if($mail)
{
	$status = 'ok';
} else
{
	$status = 'error';
}

$a = array(
	'status' => $status
);

$a = json_encode($a);
echo $a;
?>