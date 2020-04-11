<?php

$servername = "localhost:3306";
$dBUsername = "engljv43_admin";
$dBPassword = "";
$dBName = "engljv43_englishko";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Свързването е неуспешно: ".mysqli_connect_error());
}
