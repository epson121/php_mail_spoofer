
<html>
<h1> Mail spoof </h1>
<?php
$mail_regex = '/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/';
if (isset($_POST['ok'])){
	$to_mail = $_POST['to_mail'];
	$from_mail = $_POST['from_mail'];
	$subject = $_POST['subject'];
	$msg = $_POST['message'];
}
if (empty($to_mail) || empty($from_mail) || empty($msg) || empty($subject)){
	echo "Empty fields are not allowed.";
}
elseif(!preg_match($mail_regex, $to_mail) || !preg_match($mail_regex, $from_mail)){
	echo "Wrong e-mail format. Try again.";
}
else{
	$headers = 'From: ' . $from_mail;
	if (mail($to_mail, $subject, $msg, $headers)){
		echo "Message has been sent.";
	}
	else{
		echo "Error occured. Try again.";
	}
	
}
?>
</br>
<a href = "http://arka.foi.hr/~lurajcevi/si/spoof_mail.html">Back</a>
</html>
