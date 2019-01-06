<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "LearnEnglish";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Свързването е неуспешно: ".mysqli_connect_error());
}