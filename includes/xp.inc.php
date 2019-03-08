<?php

if(isset($_POST['add-xp'])) {
    
    require "dbh.inc.php";
    
    $id = $_SESSION['userId'];
    mysqli_query($conn,"UPDATE users SET xpUsers=(xpUsers + 100) WHERE uidUsers=1");

    header("Location: ../profilepage.php");
    exit();

    mysqli_close($conn);
	

}
