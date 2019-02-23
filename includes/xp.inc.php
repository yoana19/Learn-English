<?php

require "dbh.inc.php";

if(isset($_POST['add-xp'])) {
    
mysqli_query($conn,"UPDATE users SET xpUsers = (xpUsers + 100) WHERE idUsers='6'");

	
header("Location: ../profilepage.php");
exit();
	
mysqli_close($conn);

//$sql="UPDATE users SET xp=10 WHERE idUsers=5;"; 

}
