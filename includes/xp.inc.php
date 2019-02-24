<?php


if(isset($_POST['add-xp'])) {
    
    require "dbh.inc.php";
    
    $id = $row['idUsers'];
    mysqli_query($conn,"UPDATE users SET xpUsers = (xpUsers + 100) WHERE idUsers='$id'");

    header("Location: ../profilepage.php");
    exit();

    mysqli_close($conn);
	

}
