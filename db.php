<?php

require "config/constants.php";

$servername = "us-cdbr-east-06.cleardb.net";
$username = "bb389b69eea232";
$password = "a60ca44c";
$db = "heroku_1267aaff086f44e";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
