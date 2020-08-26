<?php

$servername = "sql103.epizy.com";
$dBUsername = "epiz_26597152";
$dBPassword = "XKVVn2XYou2LPe";
$dBName = "epiz_26597152_golfhub";


$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!conn) {
    die("Connection Failed: ".mysqli_connect_error());
}