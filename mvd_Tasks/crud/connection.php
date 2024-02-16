<?php
//shell.hamk.fi >>> localhost
$servername = "localhost";
$username = "madusha23000";
$password = "EPtwVVFd";
$dbname = "wp_madusha23000";

// create database connection

$conn = new mysqli($servername, $username, $password, $dbname);


//check connection
if ($conn->connect_error) {
   die("Connection Failed". $conn->connect_error);
}

?>
