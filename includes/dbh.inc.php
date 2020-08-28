<?php

$servername = "###";
$dBUsername = "###";
$dBPassword = "###";
$dBName = "###";


$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!conn) {
    die("Connection Failed: ".mysqli_connect_error());
}
