<?php
//session_start();

require "connection.php";

$sql = "SELECT * from users WHERE id='" . $_SESSION["id"] . "'";
$sql = "SELECT * from users WHERE email='" . $_SESSION["email"] . "'";
$resultat = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultat) === 1) {
    $row = mysqli_fetch_assoc($resultat);


    $_SESSION['addres'] = $row['addres'];
    $_SESSION['lastname'] = $row['lastname'];
    $_SESSION['firstname'] = $row['firstname'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['bday'] = $row['bday'];
 
}
