<?php
$servername = "localhost";
$username = "hospitalseba_map";
$password = "anisur.rahman.";
$dbname = "hospitalseba_map";


// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$connection) {
    die("Connection failed: " .mysqli_connect_error());
} 

?>