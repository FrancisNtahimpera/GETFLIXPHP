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

function notPass () {
    if (!isset($_SESSION['email'])) {
        echo $mes = "echo '<script type='text/javascript'>alert('You dont have any acces'); window.location.href = '../login.php'; </script>";
       
       
    }

}

function pre($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}