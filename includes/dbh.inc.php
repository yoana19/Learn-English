<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "EnglishKo";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Свързването е неуспешно: ".mysqli_connect_error());
} 
