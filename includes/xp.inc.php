<?php

if(isset($_POST['add-xp'])) {

    require "dbh.inc.php";

    $id1 = $row['idUsers'];
  	$id2 = $_SESSION['userId'];
  	$id3 = 6;
    mysqli_query($conn,"UPDATE users SET xpUsers=(xpUsers + 100) WHERE idUsers=".$id2."");

    header("Location: ../profilepage.php");
    exit();

    mysqli_close($conn);


}
