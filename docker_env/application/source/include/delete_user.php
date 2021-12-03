<?php
require "./functions.php";
notPass();
admin();
session_start();

if (isset($_GET['id'])) {





    require "connection.php";





    $del = mysqli_query($conn, "DELETE FROM users  WHERE id='" . $_GET["id"] . "'");

    if ($del) {
        mysqli_close($conn); // Close connection
        header("location:../profiladmin.php"); // redirects to all records page
        exit;
    } else {
        echo "Error deleting record"; // display error message if not delete
    }
}
