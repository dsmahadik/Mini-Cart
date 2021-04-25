<?php

$servername = "localhost";
$username = "root";
$password = "DSMahadik@414";
$db = "shopee";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
