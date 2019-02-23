<?php

require "dbh.inc.php";

if(isset($_POST['add-xp'])) {
    
mysqli_query($conn,"UPDATE users SET xpUsers = (xpUsers + 100) WHERE idUsers='".$_SESSION['userId']."'");

	
header("Location: ../profilepage.php");
exit();
	
mysqli_close($conn);
	
$sql = "UPDATE users SET xpUsers = (xpUsers + 100) WHERE emailUsers=?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
	echo "Имаше грешка!";
	exit();
} else {

	$newPwdHash = password_hash($password, PASSWORD_DEFAULT);
	mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
	mysqli_stmt_execute($stmt);

//$sql="UPDATE users SET xp=10 WHERE idUsers=5;"; 

}
