<?php
// for the love of connection
$servername = "database";
$username = "root";
$password = "root";
$dbname = "getflix";

// test
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
}
