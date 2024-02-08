<?php
$servername = "php24-db-1";
$username = "FirstApp";
$password = "6335";
$dbname = "FirstApp";

// create database connection

$conn = new mysqli($servername, $username, $password, $dbname);


//check connection
if ($conn->connect_error) {
   die("Connection Failed". $conn->connect_error);
}

?>