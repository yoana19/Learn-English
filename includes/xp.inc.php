<?php

if(isset($_POST['add-xp'])) {
    
    require 'dbh.inc.php';
	
	
	$sql="UPDATE users SET xp=10 WHERE idUsers=5;"; 

}