<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$area1 = $_POST["area1"];
	$area2 = $_POST["area2"];
	$area3 = $_POST["area3"];
	$area4 = $_POST["area4"];
	$date = $_POST["date"];
	$message = $_POST["message"];

	$emailadd = "name@example.com";
	$emailsubject = "Appointment from SkinMD website";
	$emailmessage = "
	Name: $name\n
	Email: $email\n
	Area1: $area1\n
	Area2: $area2\n
	Area3: $area3\n
	Area4: $area4\n
	Date: $date\n
	Message: $message\n
	";
	mail($emailadd,$emailsubject,$emailmessage);
	echo "Thank you for your appointment!"

?>
<br>
<a href = "/wordpress-trunk/">Go Back</a>
</body>
</html>