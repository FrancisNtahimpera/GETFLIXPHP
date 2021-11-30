<?php 
include "connection.php";
include "clientinfo.php";
session_start();

$sql = "SELECT * from users WHERE email='" . $_SESSION["email"] . "'";
$resultat = mysqli_query($conn, $sql);


function toogle1($var = '') {

if(!isset($_SESSION['email'])) {
    $var = "hide";
    echo $var;
}
};

function toogle2($var = '') {

    if(isset($_SESSION['email'])) {
        $var = "hide";
        echo $var;
    }
};