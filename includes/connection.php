<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$con = mysqli_connect($servername, $username, $password,'tnp');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>