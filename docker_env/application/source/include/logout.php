<?php
require "clientinfo.php";
require "signin.php";
$servername = "database";
$username = "root";
$password = "root";
$dbname = "getflix";


$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
} else {


    require "clientinfo.php";


    session_unset();
    session_destroy();

    header("Location: ../index.php");
}
