<?php

if (isset($_POST["reset-request-submit"])) {
	
	$selector = bin2hex(random_bytes(8));
	$token = random_bytes(32);
	
	$url = "www.englishko.com/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);
	
	$expires = date("U") + 1800;
	
	require 'dbh.inc.php';
	
	$userEmail = $_POST["email"];
	
	$sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "Имаше грешка!";
		exit();
	} else {
		
		mysqli_stmt_bind_param($stmt, "s", $userEmail);
		mysqli_stmt_execute($stmt);
	}
	
	$sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "Имаше грешка!";
		exit();
	} else {
		$hashedToken = password_hash($token, PASSWORD_DEFAULT);
		mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $expires);
		mysqli_stmt_execute($stmt);
	}
	
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	
	$to = $userEmail;
	
	$subject = 'Обновете вашата парола за EnglishKo';
	
	$message = '<p>Получихме заявка, че искате да смените вашата парола. Линкът за смяна
	на паролата е отдолу. Ако не сте направили тази заявка, може да
	игнорирате това съобщение. Това е линкът за обвновяне на паролата: </br><a href="' .$url . '">' . $url . '</a></p>';
	
	$headers = 'От: EnglishKo <englishko@net.ee>\r\n';
	$headers = 'Отговори на: englishko@net.ee\r\n';
	$headers = 'Content-type: text/html\r\n';
	
	mail($to, $subject, $message, $headers);
	
	header("Location: ../reset-password.php?reset=success");
	
	
} else {
	
	header("Location: ../index.php");
	
}