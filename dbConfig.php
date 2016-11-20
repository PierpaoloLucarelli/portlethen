<?php
//db details
$dbHost = 'eu-cdbr-azure-north-e.cloudapp.net';
$dbUsername = 'b7df8dd826cdf2';
$dbPassword = '17ae46f9';
$dbName = 'acsm_5070260a442b950';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
