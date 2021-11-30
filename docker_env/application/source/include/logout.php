<?php
$servername = "localhost";
$username = "id18030110_suprastar444";
$password = "ZZ?~Ba^zd&i7U@9T";
$dbname = "id18030110_getflix";


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

?>